<?php require_once('../../private/initialize.php'); ?>
<?php
  // Get the user id else redirect to index.php
  $user_id = $_GET['user_id'] ?? false;
  if(!$user_id) {
    redirect_to(url_for('users/index.php'));
  }

?>

<?php $page_title = "Delete User"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href='<?php echo url_for('users/index.php'); ?>'><i class="fas fa-users"></i> Users</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('users/detail.php?user_id=' . $user_id); ?>"><i class="fas fa-info-circle"></i> User Details</a></li>
    <li class="breadcrumb-item"><i class="far fa-trash-alt"></i> Delete User</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class="container">
  <div class="row">
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header text-secondary">
          <h2><i class="far fa-trash-alt"></i> Delete User</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <p>Are you sure you want to delete?</p>
          <p>User Name</p>
          <form class="col-sm-6" action="" method="post">
            <fieldset class="form-group">
              <button class="btn btn-outline-info" type="submit"><i class="far fa-trash-alt"></i> Delete</button>
            </fieldset><!-- fieldset -->
          </form>
        </div><!-- .card-body -->
        <div class="card-footer">
          <div class='btn-group'>
            <a href='<?php echo url_for('users/detail.php'); ?>' class="btn btn-outline-info"><i class="fas fa-info-circle"></i> User Detail</a>
            <a href='<?php echo url_for('users/edit.php'); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit User</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
