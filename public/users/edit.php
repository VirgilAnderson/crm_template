<?php require_once('../../private/initialize.php'); ?>
<?php
  // Get user_id if set
  $user_id = $_GET['user_id'] ?? false;

  // If user_id is set, then query the db
  if($user_id) {
    // Search for user by id
    $user = User::find_by_id($user_id);
  } else {
    // If not set, redirect to users page
    redirect_to(url_for('users/index.php'));
  }

  // If post request, process the form
  if(is_post_request()) {
    // Edit record using post data
    $args = $_POST['user'];
    $user->merge_attributes($args);
    $result = $user->save();

    if($result === true) {
      //$session->message('The listing was updated successfully.');
      redirect_to(url_for('/users/detail.php?user_id=' . $user_id));
    } else {
      // show errors

    }
  }

?>

<?php $page_title = "Edit " . $user->full_name(); ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href='<?php echo url_for('users/index.php'); ?>'><i class="fas fa-users"></i> Users</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('users/detail.php?user_id=' . $user_id); ?>"><i class="fas fa-info-circle"></i> <?php echo $user->full_name(); ?> Details</a></li>
    <li class="breadcrumb-item"><i class="far fa-edit"></i> Edit <?php echo $user->full_name(); ?></li>
  </ol>

  <form class="col-sm-6" action="<?php echo url_for('/users/edit.php?user_id=' . $user_id); ?>" method="post">
      <h2><i class="far fa-edit"></i> Edit User</h2>
      <fieldset class="form-group">
        <legend>Lead Information</legend>

        <?php include('form_fields.php'); ?>
        <button class="btn btn-outline-info" type="submit"><i class="far fa-edit"></i> Edit User</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container mt-4 -->


<?php include('../../private/shared/footer.php'); ?>
