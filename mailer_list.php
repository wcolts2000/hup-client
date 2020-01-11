<div class='parallax-container'>
  <div class='parallax'><img src='img/mailer.png' alt='a table of old maps'></div>
  <div class='container'>
    <div class="row">

      <form id="newsletter" action="<?php echo htmlspecialchars('/includes/newsletter-signup.inc.php') ?>" method="POST" class='yellow lighten-5 col s12 m6 offset-m3 p2 m2a'>
        <h4>Never miss a special!</h4>
        <h5>Join Our Mailer List</h5>
        <div class='input-field'>
          <input id='email' type='email' autocomplete='on' name="email" required value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email'];}?>"/>
          <label for='email'>email</label>
        </div>
        <button class='btn waves-effect waves-light yellow darken-1 black-text' id='newsletter-request' name="newsletter-request" type='submit'
          >join</button>
      </form>
    </div>
  </div>
</div>