<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Find all user query
  $sql = "SELECT * FROM user ";
  $sql .= "ORDER BY id DESC";
  $user = User::find_by_sql($sql);

  // Get company_id if set
  $company_id = $_GET['company_id'] ?? false;

  // If company_id is set, then query the db
  if($company_id) {
    // Search for company by id
    $company = Company::find_by_id($company_id);
  } else {
    // If not set, redirect to companies/index.php
    redirect_to(url_for('companies/index.php'));
  }

  // If post request, process the form
  if(is_post_request()) {
    // Edit record using post data
    $args = $_POST['company'];
    $company->merge_attributes($args);
    $result = $company->save();

    if($result === true) {
      $session->message('The company was updated successfully.');
      redirect_to(url_for('/companies/detail.php?company_id=' . $company_id));
    } else {
      // show errors

    }
  }

?>

<?php $page_title = "Edit Company"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('companies/index.php'); ?>"><i class="far fa-building"></i> Companies</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('companies/detail.php?company_id=' . $company_id); ?>"><i class="fas fa-info-circle"></i> Company Detail</a></li>
    <li class="breadcrumb-item active"><i class="far fa-edit"></i> Edit Company</li>
  </ol>

  <form class="col-sm-6" action="" method="post">
      <h2><i class="far fa-edit"></i> Edit Company</h2>
      <fieldset class="form-group">
        <legend>Company Information</legend>

        <?php include('form_fields.php'); ?>
        <button class="btn btn-outline-info" type="submit"><i class="far fa-edit"></i> Edit Company</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container mt-4 -->


<?php include('../../private/shared/footer.php'); ?>
