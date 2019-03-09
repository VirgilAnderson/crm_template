<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Find all user tasks query
  $sql = "SELECT * FROM task ";
  $sql .= "WHERE user_id=" . $session->user_id;
  $sql .= " ORDER BY id DESC";
  $task = Task::find_by_sql($sql);

?>

<?php $page_title = "Tasks"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-thumbtack"></i> Tasks</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header text-secondary">
          <div class='row'>
            <div class='col-sm'>
              <h2><i class="fas fa-thumbtack"></i> Tasks</h2>
            </div><!-- .col -->
            <div class='col-sm'>
              <!-- Search Form -->
              <form class="form-inline my-2 my-sm-0 d-flex justify-content-end">
                <input class="form-control mr-sm-2" type="text" placeholder="Search Tasks...">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="button"><i class="fas fa-search"></i></button>
              </form>
            </div><!-- .col-sm -->
          </div><!-- .row -->
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover table-sm">
              <thead class='thead-light'>
                <tr>
                  <th>Title</th>
                  <th>Task Type</th>
                  <th>Task State</th>
                  <th>Due Date</th>

                </tr>
              </thead>
              <tbody>
                <?php foreach($task as $task) { ?>
                  <tr class='clickable-row' data-href="<?php echo url_for('tasks/detail.php?task_id=' . $task->id); ?>">
                    <td><?php echo $task->task_name; ?></td>
                    <td><?php echo $task->task_type; ?></td>
                    <td><?php echo $task->task_status; ?></td>
                    <td><?php echo $task->task_due_date; ?></td>
                  </tr>
                <?php } ?>
            </tbody>
            </table>
          </div><!-- .table-responsive -->

          <!-- pagination -->
          <ul class="pagination pagination-sm justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-backward"></i></a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-forward"></i></a>
            </li>
          </ul><!-- .pagination -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('tasks/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> New Task</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
