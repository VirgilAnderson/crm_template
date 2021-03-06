<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Find all user query
  $sql = "SELECT * FROM user ";
  $sql .= "ORDER BY id DESC";
  $user = User::find_by_sql($sql);

  // If Post Request Process form
  if(is_post_request()) {
    // Get input data
    $args = $_POST['company'];
    $company = new Company($args);
    $result = $company->save();

    // Verify success
    if($result === true){
      $new_id = $company->id;
      // Add session message
      $session->message('Company was created successfully');
      redirect_to(url_for('companies/detail.php?company_id=' . $new_id));
    } else {
      echo 'error';
    }

  } else {
    // Display blank Form
    $company = new Company;

  }
?>

<?php $page_title = "New Company"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="<?php echo url_for('companies/index.php'); ?>"><i class="far fa-building"></i> Companies</a></li>
    <li class="breadcrumb-item active"><i class="far fa-plus-square"></i> New Company</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <form class="col-sm-6" action="<?php echo url_for('companies/new.php'); ?>"  method="post">
      <h2><i class="far fa-plus-square"></i> New Company</h2>
      <fieldset class="form-group">
        <legend>Fill in the form to create a new company</legend>

        <?php include('form_fields.php'); ?>

        <button class="btn btn-outline-info" type="submit"><i class="far fa-plus-square"></i> Add New Company</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
