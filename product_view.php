<div class="tabs-item" data-tab="5">

  <div class="row">
    <section class="lfproduct-form ps2">
      <form action="<?php echo htmlspecialchars('/includes/upload.lfproduct.inc.php') ?>" method="POST">

          <div class="col s12">
            <h5 class="col s12 m2c bb">Product Info</h5>
              <div class='input-field col s6'>
                <select required name='categoryId' id='categoryId'>
                  <option value='1' selected>Large Format</option>
                  <option value='2'>Offset</option>
                </select>
                <label>Product Category <span class='red-text'>*</span> </label>
              </div>
            <div class="input-field col s6">
              <input type="text" id="productName" name="productName"
                value="<?php
                  if (isset($_GET['productName'])) {
                    echo $_GET['productName'];
                  } 
                ?>">
              <label for="productName">Product Name</label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="imageName" name="imageName"
              value="<?php
                  if (isset($_GET['imageName'])) {
                    echo $_GET['imageName'];
                  } 
                ?>">
              <label for="imageName">Image Name</label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="imageAlt" name="imageAlt"
              value="<?php
                  if (isset($_GET['imageAlt'])) {
                    echo $_GET['imageAlt'];
                  } 
                ?>">
              <label for="imageAlt">Image Alt Text</label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="productDescription" name="productDescription"
              value="<?php
                  if (isset($_GET['productDescription'])) {
                    echo $_GET['productDescription'];
                  } 
                ?>">
              <label for="productDescription">Product Description</label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="productPrice" name="productPrice"
              value="<?php
                  if (isset($_GET['productPrice'])) {
                    echo $_GET['productPrice'];
                  } 
                ?>">
              <label for="productPrice">Product Price</label>
            </div>
          </div>
          <div class="col s12">
            <button class="btn waves-effect waves-light yellow darken-1 black-text" type="submit" name="product-submit">Submit  <i class="material-icons right">send</i> </button>
          </div>
          </form>

          <form action="<?php echo htmlspecialchars('/includes/upload.lfproduct.inc.php') ?>" method="POST">
            <div id="selects" class="col s12 mb2">
            <h5 class="col s12 m2c bb">Product Selects</h5>
            <div class='input-field col s12'>
              <select required name='productIdSelect' id='productIdSelect'>
                <option value='none' selected>--SELECT PRODUCT--</option>
                <?php 
                  include_once 'includes/dbh.inc.php';

                  $sql = "SELECT id, productName FROM product";
                  $stmt = mysqli_stmt_init($conn);
                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL STATEMENT FAILED : ( !";
                  } else {
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <option value='.$row['id'].' selected>'.$row['productName'].'</option>
                    ';    
                  }
                  }
                ?>
                <option value=''></option>
              </select>
              <label>Product Name <span class='red-text'>*</span> </label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="productSelectName" name="productSelectName">
              <label for="productSelectName">Select Name</label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="prod1Label" name="prod1Label">
              <label for="prod1Label">Select Label</label>
            </div>

            <div class="col s12">
            <button class="btn waves-effect waves-light yellow darken-1 black-text" type="submit" name="select-submit">Submit  <i class="material-icons right">send</i> </button>
          </div>
          </form>

          <form action="<?php echo htmlspecialchars('/includes/upload.lfproduct.inc.php') ?>" method="POST">
            <h5 class="col s12 m2c bb">Product Options</h5>
            <div class='input-field col s12'>
              <select required name='selectIdSelect' id='selectIdSelect'>
                <option value='none' selected>--PICK SELECT--</option>
                <?php 
                  include_once 'includes/dbh.inc.php';

                  $sql = "SELECT id, selectName FROM product_selects";
                  $stmt = mysqli_stmt_init($conn);
                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL STATEMENT FAILED : ( !";
                  } else {
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <option value='.$row['id'].' selected>'.$row['selectName'].'</option>
                    ';    
                  }
                  }
                ?>
                <option value=''></option>
              </select>
              <label>Selects Name <span class='red-text'>*</span> </label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="prod1key1" name="prod1key1" value="<?php if(isset($_GET[''])) ?>">
              <label for="prod1key1">Option 1 key</label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="prod1val1" name="prod1val1">
              <label for="prod1val1">Option 1 val</label>
            </div>
            <div id="optionAnchor">
              <a id="addOption" class="btn-floating small yellow black-text waves-effect waves-light">
                <i class="material-icons left black-text">add</i>  
              </a>
            </div>

          </div>
          <div class="col s12">
            <button class="btn waves-effect waves-light yellow darken-1 black-text" type="submit" name="options-submit">Submit  <i class="material-icons right">send</i> </button>
          </div>
          </form>
      </section>
    </div>

</div>
<script>
  const selectsContainer = document.getElementById("selects");
  const optionsAnchor = document.getElementById("optionsAnchor");
  const addOption = document.getElementById('addOption').addEventListener('click', addNewOption);
  let nextOptionId = 2;

  function addNewOption () {
    const newKey = createOptionInputs('key');
    const newVal = createOptionInputs('val');
    optionAnchor.before(newKey);
    optionAnchor.before(newVal);

    nextOptionId++
  }

  function createOptionInputs(optionType) {
    const newOptionWrapper = document.createElement('div');
      newOptionWrapper.classList.add("input-field");
      newOptionWrapper.classList.add("col")
      newOptionWrapper.classList.add("s6");
      newOptionWrapper.innerHTML = `
        <input 
          type="text"
          id="prod${optionType}${nextOptionId}"
          name="prod${optionType}${nextOptionId}">
        <label for="prod${optionType}${nextOptionId}">Option ${nextOptionId} ${optionType}</label>
      `;
      return newOptionWrapper;
  }

</script>