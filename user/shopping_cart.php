<?php $title = "Shopping Cart" ?>
<?php $description = "Hurry Up Print customer shopping cart" ?>
<?php require('../head.php') ?>
<?php include '../header.php'; ?>

<!-- CONTAINER -->
<div class="container">
  <div class="cart-header">
    <h1 class="cart-heading">Shopping Cart</h1>
    <p class="cart-price red-text">Price</p>
  </div>
  <div class="divider"></div>

  <!-- MAIN -->
  <main class="row">
    <div class="col s12 m12 l8 cart-left mb1">
      <!-- PRODUCTS -->
      <div class="col s12">
        <table>
          <thead>
            <tr>
              <th>Product</th>
              <th>options</th>
              <th>Price</th>
              <th>Quantity</th>
              <th class="red-text">Remove</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>banners</td>
              <td>options will go here somehow</td>
              <td>$0.87</td>
              <td>2</td>
              <td class="red-text"><i class="material-icons">delete_forever</i></td>
            </tr>
          </tbody>
        </table>
      </div> <!-- END PRODUCTS -->
    </div>
    <div class="col s12 m12 l4 cart-right mb1">
      <p>Total: 10.00</p>
    </div>
    <div class="cart-footer">
      <div class="divider"></div>
      <p class="cart-subtotal">subtotal:</p>
      <p class="cart-total red-text">Price</p>
    </div>
  </main>

</div> <!-- END CONTAINER -->

<?php include '../footer.php' ?>