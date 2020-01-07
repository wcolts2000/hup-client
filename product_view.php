<div class="tabs-item" data-tab="4">
<h5 class="col s12 m10 ms2 pt2 bb">Business Card Upload</h5>
<div class="row">
  <section class="business-card-form">
  <div class="col s12 m10 p2">
      <form action="/includes/upload.bcard.inc.php" method="POST" class="" enctype="multipart/form-data">
      <div class="input-field">
        <input type="text" id="filename" name="filename">
        <label for="filename">File name</label>
      </div>
      <div class="input-field">
        <input type="text" id="filetitle" name="filetitle">
        <label for="filetitle">File Title</label>
      </div>
      <div class="input-field">
        <input type="text" id="filedesc" name="filedesc">
        <label for="filedesc">File Description</label>
      </div>
      <div class="file-field input-field">
        <div class="btn waves-effect waves-light yellow darken-1 black-text">
          <span>Select File</span>
          <input type="file" name="file">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Upload one or more files">
        </div>
      </div>
      <button class="btn waves-effect waves-light yellow darken-1 black-text" type="submit" name="submit">Upload Image</button>
      </form>
    </div>
  </section>
</div>
<h5 class="col s12 m10 ms2 pt2 bb">Business Card List</h5>
<div class="col s12 m10 p2">
<section>
  <div class="row">
  <?php
        include_once 'includes/dbh.inc.php';

        $sql = "SELECT * FROM bcardgallery ORDER BY imgOrder DESC";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL STATEMENT FAILED : (!";
        } else {
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          echo '
          <table class="striped col s12 m10">
            <thead>
              <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Image Desc</th>
                  <th>Image Full Name</th>
                  <th>Image Order</th>
              </tr>
            </thead>
            <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
          <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['title'].'</td>
            <td>'.$row['imgDesc'].'</td>
            <td>'.$row['imgFullName'].'</td>
            <td>'.$row['imgOrder'].'</td>
          </tr>
      ';    
    }
    echo '</tbody>
    </table>
    </div>
    ';
        }

        
        ?>
  </div>
</section>
</div>
