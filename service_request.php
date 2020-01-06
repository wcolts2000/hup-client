
<?php $title = "Questionaire Answers" ?>
<?php $description = "Hurry Up Prints web services questionnaire results" ?>
<?php require('head.php') ?>

<?php include 'header.php' ?>

<div class="container m2a">
<?php 
if (!isset($_SESSION['admin'])) {
  echo "<script>window.location = window.location.origin + '/404.php'</script>";
}
?>


  <h4>Questionaire Results</h4>
  <div class="divider mb2"></div>

<main>

  <?php 
  include_once "includes/dbh.inc.php";

  $sql = "SELECT u.firstName, u.email, w.business_obj, w.prospective_clients, w.website_goal, w.uniqueness, w.new_clients, w.sales, w.brand, w.deadline, w.questions 
  FROM users u INNER JOIN webservices w 
  WHERE u.id = w.userId;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL STATEMENT FAILED : ( !";
  } else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
      echo '<ul class="collapsible">
      <li>
        <div class="collapsible-header">
          <i class="material-icons">person</i>
          '.$row['firstName']."&nbsp;". '<a href="mailto: '.$row['email'].'">'.$row['email'].'</a></div>
        <div class="collapsible-body">
          <span>
            <ul class="collapsible">
              <li>
                <div class="collapsible-header"><i class="material-icons">question_answer</i>What does your business do?</div>
                <div class="collapsible-body"><span>'.$row['business_obj'].'</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">question_answer</i>Who is your target audience?</div>
                <div class="collapsible-body"><span>'.$row['prospective_clients'].'</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">question_answer</i>What is your main goal for a website visitor?</div>
                <div class="collapsible-body"><span>'.$row['website_goal'].'</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">question_answer</i>What makes you unique from your competitors?</div>
                <div class="collapsible-body"><span>'.$row['uniqueness'].'</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">question_answer</i>How do you acquire new clients?</div>
                <div class="collapsible-body"><span>'.$row['new_clients'].'</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">question_answer</i>How many products (clients) do you sell (acquire) a month?</div>
                <div class="collapsible-body"><span>'.$row['sales'].'</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">question_answer</i>Do you have professional images and a brand identity / logo?</div>
                <div class="collapsible-body"><span>'.$row['brand'].'</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">question_answer</i>When do you need the project completed by?</div>
                <div class="collapsible-body"><span>'.$row['deadline'].'</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">question_answer</i>Is there anything else you would like to let us know about?</div>
                <div class="collapsible-body"><span>'.$row['questions'].'</span></div>
              </li>
            </ul>
          </span>
        </div>
      </li>
    </ul>';
    }
  }
  ?>

  
</main>


</div>


<?php include 'footer.php' ?>