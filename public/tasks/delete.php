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

  // If post request, process the form
  if(is_post_request()) {
    // Delete
    $result = $task->delete();
    $session->message('The task was successfully deleted.');
    redirect_to(url_for('/tasks/index.php'));
  }

?>

<?php $page_title = "Delete Task"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('tasks/index.php'); ?>"><i class="fas fa-thumbtack"></i> Tasks</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('tasks/detail.php?task_id=' . $task_id); ?>"><i class="fas fa-info-circle"></i> Task Detail</a></li>
    <li class="breadcrumb-item active"><i class="far fa-trash-alt"></i> Delete Task</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class="container">
  <div class="row">
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header text-secondary">
          <h2><i class="far fa-trash-alt"></i> Delete Task</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <p>Are you sure you want to delete?</p>
          <p><?php echo $task->task_name; ?></p>
          <form class="col-sm-6" action="<?php echo url_for('tasks/delete.php'); ?>" method="post">
            <fieldset class="form-group">
              <button class="btn btn-outline-info" type="submit"><i class="far fa-trash-alt"></i> Delete</button>
            </fieldset><!-- fieldset -->
          </form>
        </div><!-- .card-body -->
        <div class="card-footer">
          <div class='btn-group'>
            <a href='<?php echo url_for('tasks/detail.php'); ?>' class="btn btn-outline-info"><i class="fas fa-info-circle"></i> Task Detail</a>
            <a href='<?php echo url_for('tasks/edit.php'); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Task</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
