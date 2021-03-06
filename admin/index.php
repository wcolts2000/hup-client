<?php $title = 'Admin' ?>
<?php $description = 'Hurry Up Print Admin Dashboard' ?>
<?php require('../head.php') ?>

<?php require('../header.php'); ?>

<?php if (!isset($_SESSION['admin'])) {
  echo '<script>
    window.location = window.location.origin + "/"
  </script>';
}
?>
<div class="admin-wrapper">
  <div class="admin-sidebar grey darken-3 white-text">
    <ul>
      <li class="tabs-link" data-tab="1">Users</li>
      <li class="tabs-link" data-tab="2">Newsletter</li>
      <li class="tabs-link" data-tab="3">Web Request</li>
      <li class="tabs-link" data-tab="4">Categories</li>
      <li class="tabs-link" data-tab="5">Products</li>
      <li class="tabs-link" data-tab="6">Products Gallery</li>
      <li class="tabs-link" data-tab="7">Orders</li>
    </ul>
  </div>
  <main class="admin-main">
    <?php include "./users_view.php"; ?>
    <?php include "./newsltr_view.php"; ?>
    <?php include "./web_req_view.php"; ?>
    <?php include "./category_view.php"; ?>
    <?php include "./product_view.php"; ?>
    <?php include "./gallery_view.php"; ?>
    <?php include "./orders_view.php"; ?>
  </main>
</div>

<?php include "../footer.php" ?>