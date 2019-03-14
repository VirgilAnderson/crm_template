<?php require_once('../private/initialize.php'); ?>
<?php include('../private/shared/header.php'); ?>

<?php
  // Ensure User Logged In
  require_login();

  // Find all open user leads query
  $sql = "SELECT * FROM lead ";
  $sql .= "WHERE user_id=" . $session->user_id;
  $sql .= " AND lead_status!='Closed' ";
  $sql .= " AND lead_status!='Closed - Disqualified' ";
  $sql .= " AND lead_status!='Closed - Not Interested' ";
  $sql .= " ORDER BY id DESC ";
  $sql .= "LIMIT 5";
  $lead = Lead::find_by_sql($sql);

  // Find all user projects
  $sql = "SELECT * FROM project ";
  $sql .= "WHERE user_id=" . $session->user_id;
  $sql .= " ORDER BY id DESC ";
  $sql .= "LIMIT 5";
  $project = Project::find_by_sql($sql);

  // Find all user tasks query
  $sql = "SELECT * FROM task ";
  $sql .= "WHERE user_id=" . $session->user_id;
  $sql .= " ORDER BY id DESC ";
  $sql .= "LIMIT 5";
  $task = Task::find_by_sql($sql);
?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
  </ol>

</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <div class="row">

    <!-- Tasks -->
    <div class="container col-sm-6 mb-4">
      <div class="card">
        <div class="card-header">
          <a href="<?php echo url_for('tasks/index.php'); ?>" class="text-info"><h2><i class="fas fa-thumbtack"></i> Tasks</h2></a>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class='row'>
            <div class='col-sm mb-3'>
              <!-- Search Form -->
              <form class="form-inline my-2 my-sm-0 d-flex justify-content-end">
                <input class="form-control mr-sm-2" type="text" placeholder="Search Tasks...">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="button"><i class="fas fa-search"></i></button>
              </form>
            </div><!-- .col -->
          </div><!-- .row -->
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
              <thead class='thead-light'>
                <tr class='clickable-row' data-href="">
                  <th></th>
                  <th>Title</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($task as $task) { ?>
                  <tr class='clickable-row' data-href="<?php echo url_for('tasks/detail.php?task_id=' . $task->id); ?>">
                    <td><span class="badge badge-warning">Due Today</span></td>
                    <td><?php echo $task->task_name; ?></td>
                    <td><?php echo $task->task_status; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

          </div><!-- .table-responsive -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('tasks/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> New Task</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-6 -->

    <div class="container col-sm-6 mb-4">
      <!-- Leads -->
      <div class="card" id="leads">
        <div class="card-header">
          <a href="<?php echo url_for('leads/index.php'); ?>" class="text-info"><h2><i class="fas fa-dollar-sign"></i> Leads</h2></a>
        </div><!-- .card-header -->
        <div class="card-body">
            <div class='col-sm mb-3'>
              <!-- Search Form -->
              <form class="form-inline my-2 my-sm-0 d-flex justify-content-end">
                <input class="form-control mr-sm-2" type="text" placeholder="Search Leads...">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="button"><i class="fas fa-search"></i></button>
              </form>
          </div><!-- .col -->
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
              <thead class='thead-light'>
                <tr class='clickable-row' data-href="">
                  <th></th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Lead Source</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($lead as $lead) { ?>
                <tr class='clickable-row' data-href="<?php echo url_for('leads/detail.php?lead_id=' . $lead->id); ?>">
                  <td><span class='badge badge-info'>new</span></td>
                  <td><?php echo $lead->lead_first_name; ?></td>
                  <td><?php echo $lead->lead_last_name; ?></td>
                  <td><?php echo $lead->lead_source; ?></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>

          </div><!-- .table-responsive -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('leads/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> New Lead</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-6 -->
  </div><!-- . row -->


  <!-- Projects -->
  <div class="row">
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header">
          <h2><a href='<?php echo url_for('projects/index.php'); ?>' class="text-info"><i class="fas fa-project-diagram"></i> Projects</a></h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class='col-sm mb-3'>
            <!-- Search Form -->
            <form class="form-inline my-2 my-sm-0 d-flex justify-content-end">
              <input class="form-control mr-sm-2" type="text" placeholder="Search Projects...">
              <button class="btn btn-outline-dark my-2 my-sm-0" type="button"><i class="fas fa-search"></i></button>
            </form>
          </div><!-- .col -->
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
              <thead class='thead-light'>
                <tr>
                  <th>Project Title</th>
                  <th>Project State</th>
                  <th>Company Name</th>
                  <th>Project Owner</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($project as $project) { ?>
                <tr class='clickable-row' data-href="<?php echo url_for('projects/detail.php?project_id=' . $project->id); ?>">
                  <td><?php echo $project->project_name; ?></td>
                  <td><?php echo $project->project_status; ?></td>
                  <?php if($project->company_id) {
                    // Search for company by id
                    $company = Company::find_by_id($project->company_id);
                  } ?>
                  <td><?php echo $company->company_name; ?></td>
                  <?php if($project->user_id) {
                    // Search for project owner
                    $user_id = $project->user_id;
                    $user = User::find_by_id($user_id);
                  } ?>
                  <td><?php echo $user->user_username; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
          
          </div><!-- .table-responsive -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('projects/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> New Project</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->

<?php include('../private/shared/footer.php'); ?>
