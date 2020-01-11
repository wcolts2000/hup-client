<?php 
  include_once './includes/dbh.inc.php';

  $sql = "SELECT id, firstName, lastName, email, phone, address1, address2, city, zipcode, country, state, password, newsletter FROM users";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL STATEMENT FAILED : (!";
  } else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    echo '
    <div class="tabs-item" data-tab="1">
    <h5 class="col s12 m10 ms2 pt2 bb">Users</h5>
    <div class="row ps2">
    <table class="striped col s12 m10">
      <thead>
        <tr>
            <th>Id</th>
            <th>F Name</th>
            <th>L Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Add 1</th>
            <th>Add 2</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Country</th>
            <th>Newsletter</th>
        </tr>
      </thead>

      <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
          <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['firstName'].'</td>
            <td>'.$row['lastName'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['phone'].'</td>
            <td>'.$row['address1'].'</td>
            <td>'.$row['address2'].'</td>
            <td>'.$row['city'].'</td>
            <td>'.$row['state'].'</td>
            <td>'.$row['zipcode'].'</td>
            <td>'.$row['country'].'</td>
            <td>'.$row['newsletter'].'</td>
          </tr>
      ';    
    }
    echo '</tbody>
    </table>
    </div>
    </div>
    ';
  }
?>