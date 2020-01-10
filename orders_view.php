<div class="tabs-item" data-tab="7">
    <h5 class="col s12 m10 ms2 pt2 bb">Orders List</h5>
    <div class="col s12 m10 p2">
      <section>
        <div class="row">
        <?php 
          include_once 'includes/dbh.inc.php';

          $sql = "SELECT * FROM orders ORDER BY Id";
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
                  <th>Customer Name</th>
                  <th>Address</th>
                  <th>Order Id</th>
                  <th>Order Date</th>
                  <th>Shipper</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>';
          while ($row = mysqli_fetch_assoc($result)) {
            echo '
              <tr>
                <td>'.$row['CustomerName'].'</td>
                <td>'.$row['Address'].'</td>
                <td>'.$row['OrderId'].'</td>
                <td>'.$row['OrderDate'].'</td>
                <td>'.$row['Shipper'].'</td>
                <td>'.$row['Product'].'</td>
                <td>'.$row['Price'].'</td>
                <td>'.$row['Quantity'].'</td>
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