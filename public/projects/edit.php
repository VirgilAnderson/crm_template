<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get project_id if set
  $project_id = $_GET['project_id'] ?? false;

  // Find all user query
  $sql = "SELECT * FROM user ";
  $sql .= "ORDER BY id DESC";
  $user = User::find_by_sql($sql);

  // Find all companies query
  $sql = "SELECT * FROM company ";
  $sql .= "ORDER BY id DESC";
  $company = Company::find_by_sql($sql);

  // If project_id is set, then query the db
  if($project_id) {
    // Search for project by id
    $project = Project::find_by_id($project_id);
  } else {
    // If not set, redirect to projects/index.php
    redirect_to(url_for('projects/index.php'));
  }

  // If post request, process the form
  if(is_post_request()) {
    // Edit record using post data
    $args = $_POST['project'];
    $project->merge_attributes($args);
    $result = $project->save();

    if($result === true) {
      $session->message('The project was updated successfully.');
      redirect_to(url_for('/projects/detail.php?project_id=' . $project_id));
    } else {
      // show errors

    }
  }

?>

<?php $page_title = "Edit Project"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href='<?php echo url_for('projects/index.php'); ?>'><i class="fas fa-project-diagram"></i> Projects</a></li>
    <li class="breadcrumb-item"><a href='<?php echo url_for('projects/detail.php?project_id=' . $project_id); ?>'><i class="fas fa-info-circle"></i> Project Details</a></li>
    <li class="breadcrumb-item active"><i class="far fa-plus-square"></i> Edit Project</li>
  </ol>

  <form class="col-sm-6" action="" method="post">
      <h2><i class="far fa-edit"></i> Edit Project</h2>
      <fieldset class="form-group">
        <legend>Project Information</legend>

        <?php include('form_fields.php'); ?>
        <button class="btn btn-outline-info" type="submit"><i class="far fa-edit"></i> Edit Project</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container mt-4 -->


<?php include('../../private/shared/footer.php'); ?>
