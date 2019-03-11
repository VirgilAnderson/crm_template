<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get project id, if not set redireect back to projects/index.php
  $project_id = $_GET['project_id'] ?? false;
  if(!$project_id) {
    redirect_to(url_for('projects/index.php'));
  }

  // Search for project by id
  $project = Project::find_by_id($project_id);

  // Search for the project user
  $user_id = $project->user_id;
  $user = User::find_by_id($user_id);

  // Search for company by id
  $company = Company::find_by_id($project->company_id);

  // Search for the project contacts
  $sql = "SELECT * FROM contact ";
  $sql .= "WHERE project_id=";
  $sql .= $project_id;
  $contact = Contact::find_by_sql($sql);

  // Search for the project's tasks
  $sql = 'SELECT * FROM task ';
  $sql .= "WHERE project_id=" . $project->id;
  $task = Task::find_by_sql($sql);

  // Search for the project's notes
  $sql = 'SELECT * FROM note ';
  $sql .= 'WHERE project_id=' . $project->id;
  $note = Note::find_by_sql($sql);

?>

<?php $page_title = "Project Details"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href='<?php echo url_for('projects/index.php'); ?>'><i class="fas fa-project-diagram"></i> Projects</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-info-circle"></i> Project Details</li>
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
          <h2><i class="fas fa-info-circle"></i> Project Details</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <!-- Main section Leads -->
              <?php include('detail_section/project_detail.php'); ?>
            </div><!-- .col-sm-5  -->

            <!-- Group Pane Section -->
            <div class="col-sm-7">
              <div class="card bg-light">
                <div class="card-header">

                  <!-- Group Pane Tabs -->
                  <?php $selected = 'project'; ?>
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
            <a href='<?php echo url_for('projects/delete.php?project_id=' . $project_id); ?>' class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete Project</a>
            <a href='<?php echo url_for('projects/edit.php?project_id=' . $project_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Project</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
