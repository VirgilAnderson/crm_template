<?php require_once('../private/initialize.php'); ?>
<?php $page_title = "Login"; ?>
<?php include('../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container text-center d-flex justify-content-center" style="margin-top:2.5%">
  <div class='col-sm-6 display-1'>
    <i class="fas fa-skull-crossbones"></i>
  </div><!-- .col-sm-6 -->
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container d-flex flex-column justify-content-center' style="margin-bottom:5%; margin-top: 2%;">
  <form class="col-sm-6 mr-auto ml-auto" action=""  method="post">
      <h2 class='text-center'><i class="fas fa-sign-in-alt"></i> Login</h2>
      <fieldset class="form-group">
        <legend class='text-center'>Fill in the form to log in</legend>

        <div class="form-group">
          <label class="form-control-label" for="">Username</label>
          <input class="form-control" type="text" name="" placeholder="username">
        </div><!-- form-group -->

        <div class="form-group">
          <label class="form-control-label" for="">Password</label>
          <input class="form-control" type="password" name="" placeholder="password">
        </div><!-- form-group -->

        <button class="btn btn-outline-info" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
        <div class='form-group mt-3 text-right'>
          <a href='forgot_password.php' ><i class="fas fa-unlock"></i> Forgot Password?</a>
        </div>
      </fieldset><!-- fieldset -->
    </form>

</div><!-- .container -->
<?php include('../private/shared/footer.php'); ?>
