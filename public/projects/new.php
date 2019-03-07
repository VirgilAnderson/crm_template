<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Find all user query
  $sql = "SELECT * FROM user ";
  $sql .= "ORDER BY id DESC";
  $user = User::find_by_sql($sql);

  // Find all companies query
  $sql = "SELECT * FROM company ";
  $sql .= "ORDER BY id DESC";
  $company = Company::find_by_sql($sql);

  // If Post Request Process form
  if(is_post_request()) {
    // Get input data
    $args = $_POST['project'];
    $project = new Project($args);
    $result = $project->save();

    // Verify success
    if($result === true){
      $new_id = $project->id;
      // Add session message
      $session->message('Project was created successfully');
      redirect_to(url_for('projects/detail.php?project_id=' . $new_id));
    } else {
      echo 'error';
    }

  } else {
    // Display blank Form
    $project = new Project;
  }
?>

<?php $page_title = "New Project"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href='<?php echo url_for('projects/index.php'); ?>'><i class="fas fa-project-diagram"></i> Projects</a></li>
    <li class="breadcrumb-item active"><i class="far fa-plus-square"></i> New Project</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <form class="col-sm-6" action=""  method="post">
      <h2><i class="far fa-plus-square"></i> New Project</h2>
      <fieldset class="form-group">
        <legend>Fill in the form to create a new project</legend>

        <?php include('form_fields.php'); ?>

        <button class="btn btn-outline-info" type="submit"><i class="far fa-plus-square"></i> Add New Project</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
