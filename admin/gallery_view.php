<div class="tabs-item" data-tab="6">

  <div class="row">
    <div class="col s12 ms2">
      <ul class="tabs mb1">
        <li class="tab col s6 active"><a class="active black-text" href="#largeFormatGallery">Large Format Gallery Upload</a></li>
        <li class="tab col s6"><a class="black-text" href="#offsetGallery">Offset Gallery Upload</a></li>
      </ul>
    </div>

    <div id="largeFormatGallery" class="col s12">
      <div class="row">
        <div class="col s12">
          <ul class="tabs yellow lighten-4 mb1">
            <li class="tab col s3 active"><a class="active black-text" href="#bannersGallery">Banners</a></li>
            <li class="tab col s3"><a class="black-text" href="#decalsGallery">Decals</a></li>
            <li class="tab col s3"><a class="black-text" href="#displaysGallery">Displays</a></li>
            <li class="tab col s3"><a class="black-text" href="#magnetsGallery">Magnets</a></li>
            <li class="tab col s3"><a class="black-text" href="#postersGallery">Posters</a></li>
            <li class="tab col s3"><a class="black-text" href="#signageGallery">Signage</a></li>
            <li class="tab col s3"><a class="black-text" href="#vehicleWrapGallery">Vehicle Wrap</a></li>
            <li class="tab col s3"><a class="black-text" href="#windowPerfGallery">Window Perf</a></li>
          </ul>
        </div>
        <div id="bannersGallery" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Banners Upload</h5>
        </div>
        <div id="decalsGallery" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Decals Upload</h5>
        </div>
        <div id="displaysGallery" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Displays Upload</h5>
        </div>
        <div id="magnetsGallery" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Magnets Upload</h5>
        </div>
        <div id="postersGallery" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Posters Upload</h5>
        </div>
        <div id="signageGallery" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Signage Upload</h5>
        </div>
        <div id="vehicleWrapGallery" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Vehicle Wrap Upload</h5>
        </div>
        <div id="windowPerfGallery" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Window Perf Upload</h5>
        </div>
      </div>
    </div>

    <div id="offsetGallery" class="col s12">
      <div class="col s12">
        <ul class="tabs yellow mb1">
          <li class="tab col s3"><a class="active black-text" href="#bcardsGallery">Business Cards</a></li>
          <li class="tab col s3"><a class="black-text" href="#flyersGallery">Flyers</a></li>
          <li class="tab col s3"><a class="black-text" href="#invitesGallery">Invitaions</a></li>
          <li class="tab col s3"><a class="black-text" href="#menusGallery">Menus</a></li>
          <li class="tab col s3"><a class="black-text" href="#postcardsGallery">Postcards</a></li>
        </ul>
      </div>
      <div id="bcardsGallery" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Business Card Upload</h5>
        <!-- <div class="row"> -->
          <section class="business-card-form">
            <div class="col s12 m10 p2">
              <form action="<?php echo htmlspecialchars('/includes/upload.bcard.inc.php') ?>" method="POST" class="" enctype="multipart/form-data">
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
        <!-- </div> -->
        <h5 class="col s12 m10 ms2 pt2 bb">Business Card List</h5>
        <div class="col s12 m10 p2">
          <section>
            <!-- <div class="row"> -->
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
              echo '
                  </tbody>
                </table>
              ';
              }
            ?>
            <!-- </div> -->
          </section>
        </div>
      </div>
      <div id="flyersGallery" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Flyers Upload</h5>
      </div>
      <div id="invitesGallery" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Invites Upload</h5>
      </div>
      <div id="menusGallery" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Menus Upload</h5>
      </div>
      <div id="postcardsGallery" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Postcards Upload</h5>
      </div>
    </div>

  </div>

</div>
