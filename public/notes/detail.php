<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get note id, if not set redirect to notes/index.php
  $note_id = $_GET['note_id'] ?? false;
  if(!$note_id) {
    redirect_to(url_for('notes/index.php'));
  }

  // Search for note by id
  $note = Note::find_by_id($note_id);

  // Search for contacts
  if($note->contact_id) {
    $sql = 'SELECT * FROM contact ';
    $sql .= "WHERE id=" . $note->contact_id;
    $contact = Contact::find_by_sql($sql);
  } else {
    $contact = [];
  }

  // Search for company by id
  if($note->company_id) {
      $company = Company::find_by_id($note->company_id);
  } else {
    $company = [];
  }


  // Search for project
  if($note->project_id) {
    $project = Project::find_by_id($note->project_id);
  } else {
    $project = [];
  }

  // Search for lead
  if($note->lead_id){
    $lead = Lead::find_by_id($note->lead_id);
  } else {
    $lead = [];
  }

  // Search for task
  if($note->task_id){
    $sql = 'SELECT * FROM task ';
    $sql .= "WHERE id=" . $note->task_id;
    $task = Task::find_by_sql($sql);
  } else {
    $task = [];
  }


?>

<?php $page_title = "Note Details"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-info-circle"></i> Note Detail</li>
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
          <h2><i class="fas fa-info-circle"></i> Note Details</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <!-- Main section Leads -->
              <?php include('detail_section/note_detail.php'); ?>
            </div><!-- .col-sm-5  -->

            <!-- Group Pane Section -->
            <div class="col-sm-7">
              <div class="card bg-light">
                <div class="card-header">

                  <!-- Group Pane Tabs -->
                  <?php $selected = 'note'; ?>
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
            <a href='<?php echo url_for('notes/new.php'); ?>' class="btn btn-outline-info"><i class="far fa-plus-square"></i> New Note</a>
            <a href='<?php echo url_for('notes/delete.php?note_id=' . $note_id); ?>' class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete Note</a>
            <a href='<?php echo url_for('notes/edit.php?note_id=' . $note_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Note</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
