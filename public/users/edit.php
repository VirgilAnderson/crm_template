<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = "Edit lead"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href='<?php echo url_for('users/index.php'); ?>'><i class="fas fa-users"></i> Users</a></li>
    <li class="breadcrumb-item"><a href=""><i class="fas fa-info-circle"></i> User Detail</a></li>
    <li class="breadcrumb-item"><i class="far fa-edit"></i> Edit User</li>
  </ol>

  <form class="col-sm-6" action="" method="post">
      <h2><i class="far fa-edit"></i> Edit User</h2>
      <fieldset class="form-group">
        <legend>Lead Information</legend>

        <?php include('sections/form_fields.php'); ?>
        <button class="btn btn-outline-info" type="submit"><i class="far fa-edit"></i> Edit User</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container mt-4 -->


<?php include('../../private/shared/footer.php'); ?>
