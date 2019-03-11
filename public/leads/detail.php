<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // get lead id, if not set redirect back to leads/index.php
  $lead_id = $_GET['lead_id'] ?? false;
  if(!$lead_id) {
    redirect_to(url_for('leads/index.php'));
  }

  // Search for user by id
  $lead = Lead::find_by_id($lead_id);

  // Search for the lead's user
  $user_id = $lead->user_id;
  $user = User::find_by_id($user_id);

  // Search for lead's tasks
  $sql = 'SELECT * FROM task ';
  $sql .= "WHERE lead_id=" . $lead->id;
  $task = Task::find_by_sql($sql);

  // Search for the lead's notes
  $sql = 'SELECT * FROM note ';
  $sql .= 'WHERE lead_id=' . $lead->id;
  $note = Note::find_by_sql($sql);

?>

<?php $page_title = "Lead Details"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('leads/index.php'); ?>"><i class="fas fa-dollar-sign"></i> Leads</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-info-circle"></i> Lead Details</li>
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
          <h2><i class="fas fa-info-circle"></i> Lead Details</h2>


        </div><!-- .card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <!-- Main section Leads -->
              <?php include('detail_section/lead_detail.php'); ?>
            </div><!-- .col-sm-5  -->

            <!-- Group Pane Section -->
            <div class="col-sm-7">
              <div class="card bg-light">
                <div class="card-header">

                  <!-- Group Pane Tabs -->
                  <?php $selected = 'lead'; ?>
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
            <a href='<?php echo url_for('Leads/new.php'); ?>' class="btn btn-outline-info"><i class="far fa-plus-square"></i> New Lead</a>
            <a href='<?php echo url_for('Leads/delete.php?lead_id=' . $lead_id); ?>' class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete Lead</a>
            <a href='<?php echo url_for('Leads/edit.php?lead_id=' . $lead_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Lead</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
