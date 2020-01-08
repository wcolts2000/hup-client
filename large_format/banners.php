<?php $title = "Banners" ?>
<?php $description = "Hurry Up Print Banners, custom Banners" ?>
<?php require('../head.php') ?>
<?php require('../header.php'); ?>

<div class="container">

  <!-- BREADCRUMBS -->
  <nav class="yellow darken-1 m2a">
    <div class="nav-wrapper ms2">
      <div class="col s12">
        <a href="/index.php" class="breadcrumb grey-text text-lighten-1"><i class="material-icons">home</i></a>
        <a href="/large_format.php" class="breadcrumb grey-text text-lighten-1">Large Format</a>
        <a class="breadcrumb black-text">Banners</a>
      </div>
    </div>
  </nav>

  <section class="banners__section">
    <h1>Custom Banners</h1>
    <p>(UNDER CONSTRUCTION)</p>
    <div id="error"></div>
    <div class="row">

      <!-- LEFT SIDE -->
      <div class="col s12 m12 l4 product-left">
        <img src="../img/banners.png" alt="banners" class="responsive-img p2">
      </div>

      <!-- RIGHT SIDE -->
      <form autocomplete="off" class="col s12 m12 l8 product-right" action="../includes/product_calc.inc.php" id="product-form"
        method="POST">
        <input type="text" hidden id="total" name="total">
        <div class="row">
          <h5 id="totalStr">Total: $20.00</h5>
          <p class="red-text">* Required Fields</p>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input autocomplete="off" required id="length" value="12" type="text" name="length">
            <label for="length">Length In Inches <span class="red-text">*</span> </label>
          </div>
          <div class="input-field col s6">
            <input autocomplete="off" required id="width" type="text" value="12" name="width">
            <label for="width">Width In Inches <span class="red-text">*</span> </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <select required name="sides-x" id="sides-x">
              <option value="single" selected>Single Sided</option>
              <option value="double">Double Sided</option>
            </select>
            <label># of Sides <span class="red-text">*</span> </label>
          </div>
          <div class="input-field col s6">
            <select required name="material" id="material">
              <option value="matte" selected>13 oz. Matte Vinyl Banner - 56" max</option>
              <option value="glossy">13 oz. Glossy Vinyl Banner - 56" max</option>
            </select>
            <label>Material <span class="red-text">*</span> </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <select required name="grommets" id="grommets">
              <option value="none" selected>--None--</option>
              <option value="standard">Every 2 ft (all 4 sides)</option>
              <option value="top_bottom">Every 2 ft (top & bottom)</option>
              <option value="left_right">Every 2 ft (left & right)</option>
              <option value="top">Top only</option>
              <option value="bottom">Bottom only</option>
              <option value="left">Left only</option>
              <option value="right">Right only</option>
              <option value="corners">Corners only</option>
            </select>
            <label>Grommets <span class="red-text">*</span> </label>
          </div>
          <div class="input-field col s6">
            <select required name="hemming" id="hemming">
              <option value="none" selected>--None--</option>
              <option value="yes">Yes, all sides</option>
            </select>
            <label>Hemming <span class="red-text">*</span> </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <select required name="proof" id="proof">
              <option value="none" selected>--None--</option>
              <option value="email">Email Proof</option>
            </select>
            <label>Design Proof <span class="red-text">*</span> </label>
          </div>
          <div class="input-field col s6">
            <select required name="turnaround-x" id="turnaround-x">
              <option value="standard" selected>2 - 3 Day</option>
              <option value="same">Same Day</option>
            </select>
            <label>Turnaround <span class="red-text">*</span> </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input required id="jobid" type="text" name="jobid">
            <label for="jobid">Job Name <span class="red-text">*</span> </label>
          </div>
          <div class="input-field col s6">
            <input autocomplete="off" required id="quantity" type="text" name="quantity" value="1">
            <label for="quantity">Quantity <span class="red-text">*</span> </label>
          </div>
        </div>
        <button disabled class="btn waves-effect waves-light yellow black-text" type="submit" id="product-cart">Add To
          Cart</button>
      </form>
    </div>
  </section>


</div>
<script src="/js/product_calc.js"></script>

<?php require('../footer.php'); ?>