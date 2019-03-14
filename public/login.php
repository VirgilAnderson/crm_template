<?php require_once('../private/initialize.php'); ?>
<?php
$errors = [];
$username = '';
$password = '';
$verification_code = '';

if(is_post_request()) {

  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validations
  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }

  // if there were no errors, try to login
  if(empty($errors)) {
    $user = User::find_by_username($username);
    // test if user found and password is correct
    if($user != false && $user->verify_password($password)) {
      // Mark user as logged in
      $session->login($user);
      redirect_to(url_for('index.php'));
    } else {
      // username not found or password does not match
      $errors[] = "Log in was unsuccessful.";
    }

  }

}

?>

<?php $page_title = "Login"; ?>
<?php include('../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container text-center d-flex justify-content-center" style="margin-top:2.5%">
  <div class='col-sm-6 display-1'>
    <i class="fas fa-user-astronaut"></i>
  </div><!-- .col-sm-6 -->
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container d-flex flex-column justify-content-center' style="margin-bottom:5%; margin-top: 2%;">
  <form class="col-sm-6 mr-auto ml-auto" action=""  method="post">
      <h2 class='text-center'><i class="fas fa-sign-in-alt"></i> Login</h2>
      <div class='text-danger errors'>
        <?php echo display_errors($errors); ?>
      </div><!-- .errors -->
      <fieldset class="form-group">
        <legend class='text-center'>Fill in the form to log in</legend>

        <div class="form-group">
          <label class="form-control-label" for="">Username</label>
          <input class="form-control" type="text" name="username" placeholder="username">
        </div><!-- form-group -->

        <div class="form-group">
          <label class="form-control-label" for="">Password</label>
          <input class="form-control" type="password" name="password" placeholder="password">
        </div><!-- form-group -->

        <button class="btn btn-outline-info" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
        <div class='form-group mt-3 text-right'>
          <a href='forgot_password.php' ><i class="fas fa-unlock"></i> Forgot Password?</a>
        </div>
      </fieldset><!-- fieldset -->
    </form>

</div><!-- .container -->
<?php include('../private/shared/footer.php'); ?>
