<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = "Delete lead"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('leads/index.php'); ?>"><i class="fas fa-dollar-sign"></i> Leads</a></li>
    <li class="breadcrumb-item"><a href=""><i class="fas fa-info-circle"></i> Lead Detail</a></li>
    <li class="breadcrumb-item active"><i class="far fa-trash-alt"></i> Delete Lead</li>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class="container">
  <div class="row">
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header text-secondary">
          <h2><i class="far fa-trash-alt"></i> Delete Lead</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <p>Are you sure you want to delete?</p>
          <p>First Name</p>
          <form class="col-sm-6" action="" method="post">
            <fieldset class="form-group">
              <button class="btn btn-outline-info" type="submit"><i class="far fa-trash-alt"></i> Delete</button>
            </fieldset><!-- fieldset -->
          </form>
        </div><!-- .card-body -->
        <div class="card-footer">
          <div class='btn-group'>
            <a href='<?php echo url_for('leads/detail.php'); ?>' class="btn btn-outline-info"><i class="fas fa-info-circle"></i> Lead Detail</a>
            <a href='<?php echo url_for('leads/edit.php'); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Lead</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
