<?php $title = 'Admin' ?>
<?php $description = 'Hurry Up Print Admin Dashboard' ?>
<?php require('head.php') ?>

<?php require('header.php'); ?>

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
    <?php include "admin/users_view.php"; ?>
    <?php include "admin/newsltr_view.php"; ?>
    <?php include "admin/web_req_view.php"; ?>
    <?php include "admin/category_view.php"; ?>
    <?php include "admin/product_view.php"; ?>
    <?php include "admin/gallery_view.php"; ?>
    <?php include "admin/orders_view.php"; ?>
  </main>
</div>

<?php include "footer.php" ?>