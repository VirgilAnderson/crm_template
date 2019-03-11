<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get Task ID if set
  $task_id = $_GET['task_id'] ?? false;

  // If task_id is set, then query the db
  if($task_id) {
    // Search for task by id
    $task = Task::find_by_id($task_id);
  } else {
    // If not set, redirect to tasks page
    redirect_to(url_for('tasks/index.php'));
  }

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

  // If post request, process the form
  if(is_post_request()) {
    // Edit record using post data
    $args = $_POST['task'];
    $task->merge_attributes($args);
    $result = $task->save();

    if($result === true) {
      $session->message('The task was updated successfully.');
      redirect_to(url_for('/tasks/detail.php?task_id=' . $task_id));
    } else {
      // show errors

    }
  }

?>

<?php $page_title = "Edit Task"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('tasks/index.php'); ?>"><i class="fas fa-thumbtack"></i> Tasks</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('tasks/detail.php?task_id=' . $task_id); ?>"><i class="fas fa-info-circle"></i> Task Detail</a></li>
    <li class="breadcrumb-item active"><i class="far fa-edit"></i> Edit Task</li>
  </ol>

  <form class="col-sm-6" action="" method="post">
      <h2><i class="far fa-edit"></i> Edit Task</h2>
      <fieldset class="form-group">
        <legend>Task Information</legend>

        <?php include('form_fields.php'); ?>
        <button class="btn btn-outline-info" type="submit"><i class="far fa-edit"></i> Edit Task</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container mt-4 -->


<?php include('../../private/shared/footer.php'); ?>
