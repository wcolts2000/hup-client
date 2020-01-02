<?php $title = "request web services" ?>
<?php $description = "Request form to get quote on hiring our developer services" ?>
<?php require('../head.php') ?>
<?php require('../header.php'); ?>

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
<h1>Request for Web or Application Services</h1>
  <div class="divider"></div>
 <?php require('../under_construction.php') ?>

 <!-- START FORM -->
 <div class="container m2a">
  <div class="row">
    <h4>Request for Web Services. Please be as thorough as possible and fill out all pertinent fields.</h4>
    <small>If you have already created an account with us, please login at the
      <a href="/login.php">login page</a>
    </small>
    <small>If not, please 
      <a href="/register.php">Register Here First</a>
    </small>
  </div>
  <div class="row">
    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == 'emptyfields') {
        echo "<span class='err'>Fill out all required fields</span>";
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
          <textarea class="materialize-textarea" name="business_objective" id="business_objective" value="<?php
                                                                                                          if (isset($_GET['b_obj'])) {
                                                                                                            echo $_GET['b_obj'];
                                                                                                          }
                                                                                                          ?>"></textarea>
          <label for="business_objective">What does your business do?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea"  name="prospective_clients" id="prospective_clients" value="<?php
                                                                                                          if (isset($_GET['p_client'])) {
                                                                                                            echo $_GET['p_client'];
                                                                                                          }
                                                                                                          ?>"></textarea>
          <label for="prospective_clients">Who is your target audience?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="goal" id="goal" value="<?php
                                                                                                          if (isset($_GET['goal'])) {
                                                                                                            echo $_GET['goal'];
                                                                                                          }
                                                                                                          ?>"></textarea>
          <label for="goal">What is your main goal for a website visitor?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="uniq" id="uniq" value="<?php
                                                                                                          if (isset($_GET['uniq'])) {
                                                                                                            echo $_GET['uniq'];
                                                                                                          }
                                                                                                          ?>"></textarea>
          <label for="uniq">What makes you unique from your competitors?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="new_clients" id="new_clients" value="<?php
                                                                                                          if (isset($_GET['n_client'])) {
                                                                                                            echo $_GET['n_client'];
                                                                                                          }
                                                                                                          ?>"></textarea>
          <label for="new_clients">How do you acquire new clients?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="sales" id="sales" value="<?php
                                                                                                          if (isset($_GET['sales'])) {
                                                                                                            echo $_GET['sales'];
                                                                                                          }
                                                                                                          ?>"></textarea>
          <label for="sales">How many products do you sell a month?</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
          <select name="brand" id="state">
            <option value="" selected disabled> --- Please Select --- </option>
            <option value="0">No</option>
            <option value="1">Yes</option>
          </select>
          <label for="brand">Do you have professional images and a brand identity?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="datepicker" id="datepicker">
          <label for="datepicker">When do you need the project completed by?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="questions" id="questions" value="<?php
                                                                                                          if (isset($_GET['questions'])) {
                                                                                                            echo $_GET['questions'];
                                                                                                          }
                                                                                                          ?>"></textarea>
          <label for="first_name">Is there anything else you would like to let us know about?</label>
        </div>
      </div>
      
      <input name="register-submit" type="submit" value="Submit"
        class="btn waves-effect waves-light yellow darken-1 black-text">

    </form>
  </div>
</div>
 <!-- END FORM -->

</section>

</div>

<?php require('../footer.php'); ?>