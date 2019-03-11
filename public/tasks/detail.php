<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get task id, if not set redirect to tasks/index.php
  $task_id = $_GET['task_id'] ?? false;
  if(!$task_id) {
    redirect_to(url_for('tasks/index.php'));
  }

  // Search for task by id
  $task = Task::find_by_id($task_id);

  // Search for contacts
  if($task->contact_id) {
    $sql = 'SELECT * FROM contact ';
    $sql .= "WHERE id=" . $task->contact_id;
    $contact = Contact::find_by_sql($sql);
  }

  // Search for company by id
  $company = Company::find_by_id($task->company_id);

  // Search for project
  if($task->project_id){
    $sql = 'SELECT * FROM company ';
    $sql .= "WHERE id=" . $task->project_id;
    $project = Company::find_by_sql($sql);
  } else {
    $project = [];
  }

  // Search for lead
  if($task->lead_id){
    $sql = 'SELECT * FROM lead ';
    $sql .= "WHERE id=" . $task->lead_id;
    $lead = Lead::find_by_sql($sql);
  } else {
    $lead = [];
  }


?>

<?php $page_title = "Task Details"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('tasks/index.php'); ?>"><i class="fas fa-thumbtack"></i> Tasks</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-info-circle"></i> Task Detail</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <div class="row">

    <!-- Lead Card -->
    <div class="container col-12 mb-4">
      <!-- Messages -->
      <?php echo display_session_message(); ?>
      <div class="card">

        <!-- Card Header -->
        <div class="card-header text-secondary">
          <h2><i class="fas fa-info-circle"></i> Task Details</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <!-- Main section Leads -->
              <?php include('detail_section/task_detail.php'); ?>
            </div><!-- .col-sm-5  -->

            <!-- Group Pane Section -->
            <div class="col-sm-7">
              <div class="card bg-light">
                <div class="card-header">

                  <!-- Group Pane Tabs -->
                  <?php $selected = 'tasks'; ?>
                  <?php include('../../private/shared/detail_panes/group_tabs.php'); ?>
                </div><!-- .card-header -->

                <!-- Group pane content -->
                <div class="card-body">
                  <div class="tab-content">
                    <?php include('../../private/shared/detail_panes/panes.php'); ?>
                  </div><!-- .tab-content -->
                </div><!-- .card-body -->
              </div><!-- .card -->
            </div><!-- .col-7 -->
          </div><!-- .row -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <div class='btn-group'>
            <a href='<?php echo url_for('tasks/new.php'); ?>' class="btn btn-outline-info"><i class="far fa-plus-square"></i> New Task</a>
            <a href='<?php echo url_for('tasks/delete.php?task_id=' . $task_id); ?>' class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete Task</a>
            <a href='<?php echo url_for('tasks/edit.php?task_id=' . $task_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Task</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
