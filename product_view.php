<div class="tabs-item" data-tab="4">

  <div class="row">
    <div class="col s12">
      <ul class="tabs grey darken-2 mb1">
        <li class="tab col s3"><a class="active white-text" href="#largeFormat">Large Format</a></li>
        <li class="tab col s3"><a class="white-text" href="#offset">Offset</a></li>
        <li class="tab col s3"><a class="white-text" href="#garments">Garments</a></li>
        <li class="tab col s3"><a class="white-text" href="#websites">Websites</a></li>
      </ul>
    </div>
    <div id="largeFormat" class="col s12">        
      <div class="row">
        <div class="col s12 m12 l12">
          <ul class="tabs yellow mb1">
            <li class="tab col s3"><a class="active black-text" href="#banners">Banners</a></li>
            <li class="tab col s3"><a class="black-text" href="#decals">Decals</a></li>
            <li class="tab col s3"><a class="black-text" href="#displays">Displays</a></li>
            <li class="tab col s3"><a class="black-text" href="#magnets">Magnets</a></li>
            <li class="tab col s3"><a class="black-text" href="#posters">Posters</a></li>
            <li class="tab col s3"><a class="black-text" href="#signage">Signage</a></li>
            <li class="tab col s3"><a class="black-text" href="#vehicleWrap">Vehicle Wrap</a></li>
            <li class="tab col s3"><a class="black-text" href="#windowPerf">Window Perf</a></li>
          </ul>
        </div>
        <div id="banners" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Banners Upload</h5>
        </div>
        <div id="decals" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Decals Upload</h5>
        </div>
        <div id="displays" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Displays Upload</h5>
        </div>
        <div id="magnets" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Magnets Upload</h5>
        </div>
        <div id="posters" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Posters Upload</h5>
        </div>
        <div id="signage" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Signage Upload</h5>
        </div>
        <div id="vehicleWrap" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Vehicle Wrap Upload</h5>
        </div>
        <div id="windowPerf" class="col s12">
          <h5 class="col s12 m10 ms2 pt2 bb">Window Perf Upload</h5>
        </div>
      </div>
    </div>

    <div id="offset" class="col s12">
      <div class="col s12">
        <ul class="tabs yellow mb1">
          <li class="tab col s3"><a class="active black-text" href="#bcards">Business Cards</a></li>
          <li class="tab col s3"><a class="black-text" href="#flyers">Flyers</a></li>
          <li class="tab col s3"><a class="black-text" href="#invites">Invitaions</a></li>
          <li class="tab col s3"><a class="black-text" href="#menus">Menus</a></li>
          <li class="tab col s3"><a class="black-text" href="#postcards">Postcards</a></li>
        </ul>
      </div>
      <div id="bcards" class="col s12">
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
      <div id="flyers" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Flyers Upload</h5>
      </div>
      <div id="invites" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Invites Upload</h5>
      </div>
      <div id="menus" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Menus Upload</h5>
      </div>
      <div id="postcards" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Postcards Upload</h5>
      </div>
    </div>

    <div id="garments" class="col s12">
      <div class="col s12">
        <ul class="tabs yellow mb1">
          <li class="tab col s3"><a class="active black-text" href="#embroidery">Embroidery</a></li>
          <li class="tab col s3"><a class="black-text" href="#silkscreen">Silk Screen</a></li>
          <li class="tab col s3"><a class="black-text" href="#heatvinyl">Heat Vinyl</a></li>
        </ul>
      </div>
      <div id="embroidery" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Embroidery Upload</h5>
      </div>
      <div id="silkscreen" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Silk Screen Upload</h5>
      </div>
      <div id="heatvinyl" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Heat Vinyl Upload</h5>
      </div>
    </div>

    <div id="websites" class="col s12">
      <div class="col s12">
        <ul class="tabs yellow mb1">
          <li class="tab col s3"><a class="active black-text" href="#apps">Apps</a></li>
          <li class="tab col s3"><a class="black-text" href="#blogs">Blogs</a></li>
          <li class="tab col s3"><a class="black-text" href="#dynamic">Dynamic</a></li>
          <li class="tab col s3"><a class="black-text" href="#ecomm">E-commerce</a></li>
          <li class="tab col s3"><a class="black-text" href="#rest">Restaurant</a></li>
          <li class="tab col s3"><a class="black-text" href="#static">Static</a></li>
        </ul>
      </div>
      <div id="apps" class="col s12">          
        <h5 class="col s12 m10 ms2 pt2 bb">Apps Site Upload</h5>
      </div>
      <div id="blogs" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Blog Site Upload</h5>
      </div>
      <div id="dynamic" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Dynamic Site Upload</h5>
      </div>
      <div id="ecomm" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">E-commerce Site Upload</h5>
      </div>
      <div id="rest" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Restaurant Site Upload</h5>
      </div>
      <div id="static" class="col s12">
        <h5 class="col s12 m10 ms2 pt2 bb">Static Site Upload</h5>
      </div>
    </div>
  </div>

</div>
