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

  // Find all contacts query
  $sql = "SELECT * FROM contact ";
  $sql .= "ORDER BY id DESC";
  $contact = Contact::find_by_sql($sql);

  // Find all leads query
  $sql = "SELECT * FROM lead ";
  $sql .= "ORDER BY id DESC";
  $lead = Lead::find_by_sql($sql);

  // Find all projects query
  $sql = "SELECT * FROM project ";
  $sql .= "ORDER BY id DESC";
  $project = Project::find_by_sql($sql);

  // If Post Request Process form
  if(is_post_request()) {
    // Get input data
    $args = $_POST['task'];
    $task = new Task($args);
    $result = $task->save();

    // Verify success
    if($result === true){
      $new_id = $task->id;
      // Add session message
      $session->message('Task was created successfully');
      redirect_to(url_for('tasks/detail.php?task_id=' . $new_id));
    } else {
      echo 'error';
    }
  } else {
    // Display blank Form
    $task = new Task;
  }
?>

<?php $page_title = "New task"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('tasks/index.php'); ?>"><i class="fas fa-thumbtack"></i> Tasks</a></li>
    <li class="breadcrumb-item active"><i class="far fa-plus-square"></i> New Task</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <form class="col-sm-6" action="<?php echo url_for('tasks/new.php'); ?>"  method="post">
      <h2><i class="far fa-plus-square"></i> New Task</h2>
      <fieldset class="form-group">
        <legend>Fill in the form to create a new task</legend>

        <?php include('form_fields.php'); ?>

        <button class="btn btn-outline-info" type="submit"><i class="far fa-plus-square"></i> Add New task</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
