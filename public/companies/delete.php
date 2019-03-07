<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get the company id else redirect to index.php
  $company_id = $_GET['company_id'] ?? false;
  if($company_id) {
    // Search for company by id
    $company = Company::find_by_id($company_id);
  } else {
    // If not set, redirect to companies page
    redirect_to(url_for('companies/index.php'));
  }

  // If post request, process the form
  if(is_post_request()) {
    // Delete
    $result = $company->delete();
    $session->message('The company was successfully deleted.');
    redirect_to(url_for('/companies/index.php'));
  }

?>

<?php $page_title = "Delete Company"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('companies/index.php'); ?>"><i class="far fa-building"></i> Companies</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('companies/detail.php?company_id=' . $company_id); ?>"><i class="fas fa-info-circle"></i> Company Detail</a></li>
    <li class="breadcrumb-item active"><i class="far fa-trash-alt"></i> Delete Company</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class="container">
  <div class="row">
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header text-secondary">
          <h2><i class="far fa-trash-alt"></i> Delete Company</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <p>Are you sure you want to delete?</p>
          <p><?php echo $company->company_name; ?></p>
          <form class="col-sm-6" action="" method="post">
            <fieldset class="form-group">
              <button class="btn btn-outline-info" type="submit"><i class="far fa-trash-alt"></i> Delete</button>
            </fieldset><!-- fieldset -->
          </form>
        </div><!-- .card-body -->
        <div class="card-footer">
          <div class='btn-group'>
            <a href='<?php echo url_for('companies/detail.php?company_id=' . $company_id); ?>' class="btn btn-outline-info"><i class="fas fa-info-circle"></i> Company Detail</a>
            <a href='<?php echo url_for('companies/edit.php?company_id=' . $company_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Company</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
