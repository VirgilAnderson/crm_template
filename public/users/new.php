<?php require_once('../../private/initialize.php'); ?>

<?php
  // If Post Request Process form
  if(is_post_request()) {
    // Get input data
    $args = $_POST['user'];
    $user = new User($args);
    $result = $user->save();

    // Verify success
    if($result === true){
      $new_id = $user->id;
      // Add session message
      // $session->message('User was created successfully');
      redirect_to(url_for('users/detail.php?user_id=' . $new_id));
    } else {
      echo 'error';
    }

  } else {
    // Display blank Form
    $user = new User;
  }


?>

<?php $page_title = "New User"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href='<?php echo url_for('users/index.php'); ?>'><i class="fas fa-users"></i> Users</a></li>
    <li class="breadcrumb-item"><i class="far fa-plus-square"></i> New User</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <form class="col-sm-6" action="<?php echo url_for('users/new.php'); ?>"  method="post">
      <h2><i class="far fa-plus-square"></i> New User</h2>
      <fieldset class="form-group">
        <legend>Fill in the form to create a new user</legend>

        <?php include('form_fields.php'); ?>

        <button class="btn btn-outline-info" type="submit"><i class="far fa-plus-square"></i> Add New User</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
