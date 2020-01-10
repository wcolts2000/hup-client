<div class="tabs-item" data-tab="6">

    <h5 class="col s12 m10 m2 pt2 bb">Categories Upload</h5>
    <div class="row">
      <div class="col s12 m10 p2s">
        <form action="/includes/upload.category.inc.php" method="POST">
          <div class="input-field">
            <input type="text" id="catName" name="catName">
            <label for="catName">Product category name</label>
          </div>
          <button class="btn waves-effect waves-light yellow darken-1 black-text" type="submit" name="submit">Create Category</button>
        </form>
      </div>
    </div>
    <h5 class="col s12 m10 ms2 pt2 bb">Category List</h5>
    <div class="col s12 m10 p2">
      <section>
        <div class="row">
        <?php 
          include_once 'includes/dbh.inc.php';

          $sql = "SELECT * FROM product_categories ORDER BY Id";
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
                  <th>Category Name</th>
                </tr>
              </thead>
              <tbody>';
          while ($row = mysqli_fetch_assoc($result)) {
            echo '
              <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['name'].'</td>
              </tr>
            ';    
          }
          echo '
              </tbody>
            </table>
          ';
          }
        ?>
        </div>
      </section>
    </div>
  </div>

</div>