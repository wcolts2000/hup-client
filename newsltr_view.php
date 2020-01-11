<?php 
  include_once './includes/dbh.inc.php';

  $sql = "SELECT * FROM newsletter";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL STATEMENT FAILED : (!";
  } else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    echo '
    <div class="tabs-item" data-tab="2">
    <h5 class="col s12 m10 ms2 pt2 bb">Newsletter Mailer</h5>
    <div class="row ps2">
    <table class="striped col s12 m10">
      <thead>
        <tr>
            <th>Email</th>
            <th>Date Subscribed</th>
            <th>Active</th>
        </tr>
      </thead>
      <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
          <tr>
            <td>'.$row['email'].'</td>
            <td>'.$row['date'].'</td>
            <td>'.$row['active'].'</td>
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