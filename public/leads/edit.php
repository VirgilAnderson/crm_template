<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Ensure User is Admin
  require_admin();

  // Find all user query
  $sql = "SELECT * FROM user ";
  $sql .= "ORDER BY id DESC";
  $user = User::find_by_sql($sql);

  // Get user_id if set
  $lead_id = $_GET['lead_id'] ?? false;

  // If lead_id is set, then query the db
  if($lead_id) {
    // Search for lead by id
    $lead = Lead::find_by_id($lead_id);
  } else {
    // If not set, redirect to leads page
    redirect_to(url_for('leads/index.php'));
  }

  // If post request, process the form
  if(is_post_request()) {
    // Edit record using post data
    $args = $_POST['lead'];
    $lead->merge_attributes($args);
    $result = $lead->save();

    if($result === true) {
      $session->message('The lead was updated successfully.');
      redirect_to(url_for('/leads/detail.php?lead_id=' . $lead_id));
    } else {
      // show errors

    }
  }


?>

<?php $page_title = "Edit lead"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('leads/index.php'); ?>"><i class="fas fa-dollar-sign"></i> Leads</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('leads/detail.php?lead_id=' . $lead_id); ?>"><i class="fas fa-info-circle"></i> Lead Detail</a></li>
    <li class="breadcrumb-item active"><i class="far fa-edit"></i> Edit Lead</li>
  </ol>

  <form class="col-sm-6" action="" method="post">
      <h2><i class="far fa-edit"></i> Edit Lead</h2>
      <fieldset class="form-group">
        <legend>Lead Information</legend>

        <?php include('form_fields.php'); ?>
        <button class="btn btn-outline-info" type="submit"><i class="far fa-edit"></i> Edit Lead</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container mt-4 -->


<?php include('../../private/shared/footer.php'); ?>
