<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get the user id else redirect to index.php
  $user_id = $_GET['user_id'] ?? false;
  if($user_id) {
    // Search for user by id
    $user = User::find_by_id($user_id);
  } else {
    // If not set, redirect to users page
    redirect_to(url_for('users/index.php'));
  }

  // If post request, process the form
  if(is_post_request()) {
    // Delete
    $result = $user->delete();
    //$session->message('The account was successfully deleted.');
    //$session->logout();
    redirect_to(url_for('/users/index.php'));
  }
?>

<?php $page_title = "Delete User"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href='<?php echo url_for('users/index.php'); ?>'><i class="fas fa-users"></i> Users</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('users/detail.php?user_id=' . $user_id); ?>"><i class="fas fa-info-circle"></i> <?php echo $user->full_name(); ?> Details</a></li>
    <li class="breadcrumb-item"><i class="far fa-trash-alt"></i> Delete <?php echo $user->full_name(); ?></li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class="container">
  <div class="row">
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header text-secondary">
          <h2><i class="far fa-trash-alt"></i> Delete <?php echo $user->full_name(); ?></h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <form class="col-sm-6" action="" method="post">
            <legend>Are you sure you want to delete</legend>
            <legend><?php echo $user->full_name(); ?>?</legend>
            <fieldset class="form-group mt-3">
              <button class="btn btn-outline-info" type="submit"><i class="far fa-trash-alt"></i> Delete</button>
            </fieldset><!-- fieldset -->
          </form>
        </div><!-- .card-body -->
        <div class="card-footer">
          <div class='btn-group'>
            <a href='<?php echo url_for('users/detail.php?user_id=' . $user_id); ?>' class="btn btn-outline-info"><i class="fas fa-info-circle"></i> <?php echo $user->full_name(); ?> Detail</a>
            <a href='<?php echo url_for('users/edit.php?user_id=' . $user_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit <?php echo $user->full_name(); ?></a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
