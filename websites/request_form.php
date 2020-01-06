<?php $title = "request web services" ?>
<?php $description = "Request form to get quote on hiring our developer services" ?>
<?php require('../head.php') ?>
<?php require('../header.php'); ?>

<?php 
  if (!isset($_SESSION['id'])) {
    echo "<script>window.location = window.location.origin + '/login.php?webservice=true';</script>";
    exit();
  }
?> 

<div class="container">
<!-- BREADCRUMBS -->
<nav class="yellow darken-1 m2a">
  <div class="nav-wrapper ms2">
    <div class="col s12">
      <a href="/index.php" class="breadcrumb grey-text text-lighten-1"><i class="material-icons">home</i></a>
      <a href="/websites.php" class="breadcrumb grey-text text-lighten-1">Websites</a>
      <a href="/websites/request_form.php" class="breadcrumb black-text">Request Services</a>
    </div>
  </div>
</nav>

<section class="request_form__section">
<h1>Web Services Questionaire</h1>
  <div class="divider"></div>

 <!-- START FORM -->
 <div class="container m2a">
  <div class="row">
    <h4>Request for Web Services. Please be as thorough as possible and fill out all pertinent fields.</h4>
    <p>If you have already created an account with us, please login at the
      <a href="/login.php">Login Page</a>
    </p>
    <p>If not, please 
      <a href="/register.php">Register Here First</a>
    </p>
  </div>
  <div class="row">
      <p class="red-text">* Required fields</p>
    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == 'emptyfields') {
        echo "<span class='err'>Fill out all required fields</span>";
      } elseif ($_GET['error'] == 'notloggedin') {
        echo "<span class='err'>You must be logged in to request services, please log in or register</span>";
      } elseif ($_GET['error'] == "sqlerror") {
        echo "<span class='err'>SQL ERROR</span>";
      }
    }
    ?>
  </div>

  <div class="row">
    <form class="col s12" action="/includes/request.web.services.inc.php" method="post">
      <div class="row">
      <h5>Business Information</h5>
      <!-- <div class="col s12 divider mb1"></div> -->
      <div class="row">
        <div class="input-field col s12">
          <textarea required class="materialize-textarea" name="business_objective" id="business_objective"><?php if (isset($_GET['b_obj'])) { echo $_GET['b_obj']; } ?></textarea>
          <label for="business_objective">What does your business do? <span class="red-text">*</span></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea required class="materialize-textarea"  name="prospective_clients" id="prospective_clients"><?php
                                                                                                          if (isset($_GET['p_client'])) {
                                                                                                            echo $_GET['p_client'];
                                                                                                          }
                                                                                                          ?></textarea>
          <label for="prospective_clients">Who is your target audience? <span class="red-text">*</span></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea  required class="materialize-textarea" name="goal" id="goal"><?php
                                                                                                          if (isset($_GET['goal'])) {
                                                                                                            echo $_GET['goal'];
                                                                                                          }
                                                                                                          ?></textarea>
          <label for="goal">What is your main goal for a website visitor? <span class="red-text">*</span></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea required class="materialize-textarea" name="uniq" id="uniq"><?php
                                                                                                          if (isset($_GET['uniq'])) {
                                                                                                            echo $_GET['uniq'];
                                                                                                          }
                                                                                                          ?></textarea>
          <label for="uniq">What makes you unique from your competitors? <span class="red-text">*</span></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="new_clients" id="new_clients"><?php
                                                                                                          if (isset($_GET['n_client'])) {
                                                                                                            echo $_GET['n_client'];
                                                                                                          }
                                                                                                          ?></textarea>
          <label for="new_clients">How do you acquire new clients?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="sales" id="sales"><?php
                                                                                                          if (isset($_GET['sales'])) {
                                                                                                            echo $_GET['sales'];
                                                                                                          }
                                                                                                          ?></textarea>
          <label for="sales">How many products (clients) do you sell (acquire) a month?</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <h6 class="grey-text">Do you have professional images and a brand identity / logo? <span class="red-text">*</span></h6>
          <p>
            <input required value="1" id="yes" type="radio" class="with-gap" name="brand" <?php if (isset($_GET['brand'])) {
              if($_GET['brand'] == "1") {
                echo "checked";
              }
            } ?>>
            <label for="yes">Yes</label>
          </p>
          <p>
            <input required value='false' id="no" type="radio" class="with-gap" name="brand" <?php if (isset($_GET['brand'])) {
              if($_GET['brand'] == "false") {
                echo "checked";
              }
            } ?>>
            <label for="no">No</label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="datepicker" type="text" class="datepicker" id="datepicker" value="<?php if (isset($_GET['deadline'])) {
            echo $_GET['deadline'];
          } ?>">
          <label for="datepicker">When do you need the project completed by?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="questions" id="questions"><?php
                                                                                                          if (isset($_GET['questions'])) {
                                                                                                            echo $_GET['questions'];
                                                                                                          }
                                                                                                          ?></textarea>
          <label for="first_name">Is there anything else you would like to let us know about?</label>
        </div>
      </div>
      <input 
        type="text"
        name="id"
        hidden
        value="<?php 
          if(isset($_SESSION['id'])) {
            echo $_SESSION['id'];
          } else {
            echo  null;
          }
        ?>"
      >
      
      <button name="register-submit" type="submit"
        class="btn waves-effect waves-light yellow darken-1 black-text">Submit</button>

    </form>
  </div>
</div>
<!-- END FORM -->

</section>

</div>

<?php require('../footer.php'); ?>