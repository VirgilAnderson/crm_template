<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get user by session
  $user_id = $session->user_id;

  // Get User account by id
  $user = User::find_by_id($user_id);

?>

<?php $page_title = "Account"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-user-circle"></i> Account</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
    <div class="container col-12 mb-4">
      <!-- Messages -->
      <?php echo display_session_message(); ?>
      
      <div class="card">
        <div class="card-header text-secondary">
          <h2><i class="fas fa-user-circle"></i> Account</h2>
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
        <div class="card-footer">
          <div class='btn-group'>
            <a href='<?php echo url_for('account/delete.php'); ?>' class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete Account</a>
            <a href='<?php echo url_for('account/edit.php?user_id=' . $user_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Account</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
