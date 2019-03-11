<?php require_once('../../private/initialize.php'); ?>

<?php
  // Ensure User Logged In
  require_login();

  // Ensure User is Admin
  require_admin();

  // get user id, if not set redirect back to user/index.php
  $user_id = $_GET['user_id'] ?? false;
  if(!$user_id) {
    redirect_to('index.php');
  }

  // Search for user by id
  $user = User::find_by_id($user_id);

?>

<?php $page_title = $user->full_name() . " Details"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href='<?php echo url_for('users/index.php'); ?>'><i class="fas fa-users"></i> Users</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-info-circle"></i> <?php echo $user->full_name(); ?> Details</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <div class="row">

    <!-- Lead Card -->
    <div class="container col-12 mb-4">
      <!-- Messages -->
      <?php echo display_session_message(); ?>
      <div class="card">
        <div class="card-header text-secondary">
          <h2><i class="fas fa-info-circle"></i> <?php echo $user->full_name(); ?> Details</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <ul class="list-group">
          <dl class="list-group-item d-flex">
            <dt class="mr-4">First Name</dt>
            <dd><?php echo $user->user_first_name; ?></dd>
          </dl>
          <dl class="list-group-item d-flex">
            <dt class="mr-4">Last Name</dt>
            <dd><?php echo $user->user_last_name; ?></dd>
          </dl>
          <dl class="list-group-item d-flex">
            <dt class="mr-4">Role</dt>
            <dd><?php echo $user->user_role; ?></dd>
          </dl>
          <dl class="list-group-item d-flex">
            <dt class="mr-4">Email</dt>
            <dd><?php echo $user->user_email; ?></dd>
          </dl>
          <dl class="list-group-item d-flex">
            <dt class="mr-4">Username</dt>
            <dd><?php echo $user->user_username; ?></dd>
          </dl>
        </div><!-- .card-body -->
        <div class='card-footer'>
          <div class='btn-group'>
            <a href='<?php echo url_for('users/new.php'); ?>' class="btn btn-outline-info"><i class="far fa-plus-square"></i> New User</a>
            <a href='<?php echo url_for('users/delete.php?user_id=' . $user->id); ?>' class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete <?php echo $user->full_name(); ?></a>
            <a href='<?php echo url_for('users/edit.php?user_id=' . $user->id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit <?php echo $user->full_name(); ?></a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
