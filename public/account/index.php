<?php require_once('../../private/initialize.php'); ?>
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
      <div class="card">
        <div class="card-header">
          <h2><i class="fas fa-user-circle"></i> Account</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="card-body">
            <ul class="list-group">
            <dl class="list-group-item d-flex">
              <dt class="mr-4">First Name</dt>
              <dd>First_name</dd>
            </dl>
            <dl class="list-group-item d-flex">
              <dt class="mr-4">Last Name</dt>
              <dd>Last_name</dd>
            </dl>
            <dl class="list-group-item d-flex">
              <dt class="mr-4">Role</dt>
              <dd>Role</dd>
            </dl>
            <dl class="list-group-item d-flex">
              <dt class="mr-4">Email</dt>
              <dd>Email_address</dd>
            </dl>
            <dl class="list-group-item d-flex">
              <dt class="mr-4">Username</dt>
              <dd>Username</dd>
            </dl>
        </div><!-- .card-body -->
        <div class="card-footer">
          <div class="btn-group">
            <button type="button" class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete Account</button>
            <button type="button" class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Account</button>
          </div>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
