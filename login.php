<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hurry Up Print | Login</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/styles.css" />
  <link rel="icon" href="img/favicon.png" sizes="32x32">
</head>

<body>
  <?php include 'header.php'; ?>

  <div class="container" style="margin: 2rem auto">
    <div class="row">
      <div class="col s12 m6">
        <div class="card grey lighten-4">
          <div class="card-content">
            <span class="card-title">New Customer?</span>
            <p>Please go to our
              <a href="register.php" class="blue-grey-text">register</a>
              page and create a new account.</p>
          </div>
          <div class="card-action">
            <a class="btn waves-effect waves-light black white-text" href="register.php">Register</a>
          </div>
        </div>
      </div>
      <div class="col s12 m6">
        <!-- <div class="card grey lighten-4"> -->
        <form class="card grey lighten-4">
          <div class="card-content">
            <span class="card-title">
              Login
            </span>
            <div class="row">
              <label for="email">Email</label>
              <input type="email" id="email" placeholder="johndoe@email.com" class="validate">
            </div>
            <div class="row">
              <label for="password">Password</label>
              <input type="password" id="password" placeholder="$k8vG3p09aB%77hn2^" class="validate">
            </div>
            <div class="row">

              <button type="submit" class="btn yellow darken-2 black-text waves-effect waves-light">Login</button>
            </div>
          </div>
        </form>
        <!-- </div> -->
      </div>
    </div>
  </div>


  <?php include 'footer.php'; ?>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script src="js/index.js"></script>
</body>

</html>