<?php require_once('../private/initialize.php'); ?>
<?php $page_title = "Forgot Password"; ?>
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
      <h2 class='text-center'><i class="fas fa-unlock"></i> Reset Password</h2>
      <fieldset class="form-group">
        <legend class='text-center'>Enter a new password in the fields below.</legend>

        <div class="form-group">
          <label class="form-control-label" for="password">New Password</label>
          <input class="form-control" type="password" name="password" placeholder="New Password">
        </div><!-- form-group -->

        <div class="form-group">
          <label class="form-control-label" for="confirm_password">Confirm Password</label>
          <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password">
        </div><!-- form-group -->

        <button class="btn btn-outline-info" type="submit"><i class="fas fa-unlock"></i> Reset Password</button>

        <div class='form-group mt-3 text-right'>
          <a href='password_reset.php' ><i class="far fa-share-square"></i> Resend Link</a>
        </div>

      </fieldset><!-- fieldset -->
    </form>
    <ul class='nav mr-auto ml-auto'>
      <li class='nav-item'>
        <a href='' class='nav-link'>Privacy Policy</a>
      </li><!-- .nav-item -->
      <li class='nav-item'>
        <a href='' class='nav-link'>Terms Of Use</a>
      </li><!-- .nav-item -->
      <li class='nav-item'>
        <a href='' class='nav-link'>Security</a>
      </li><!-- .nav-item -->
      <li class='nav-item'>
        <a href='' class='nav-link disabled'>Contact CRM Template</a>
      </li><!-- .nav-item -->
    </ul><!-- nav -->
</div><!-- .container -->
<?php include('../private/shared/footer.php'); ?>
