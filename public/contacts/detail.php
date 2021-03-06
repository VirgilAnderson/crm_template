<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get contact id, if not set redirect back to contactss/index.php
  $contact_id = $_GET['contact_id'] ?? false;
  if(!$contact_id) {
    redirect_to(url_for('contacts/index.php'));
  }

  // Search for contact by id
  $contact = Contact::find_by_id($contact_id);

  // Search for company by id
  $company = Company::find_by_id($contact->company_id);

  // Search for project by id
  $project = Project::find_by_id($contact->project_id);

  // Search for the contact owner
  $user_id = $contact->user_id;
  $user = User::find_by_id($user_id);

  // Search for the contact's tasks
  $sql = 'SELECT * FROM task ';
  $sql .= "WHERE contact_id=" . $contact->id;
  $task = Task::find_by_sql($sql);

  // Search for the contact's notes
  $sql = 'SELECT * FROM note ';
  $sql .= 'WHERE contact_id=' . $contact->id;
  $note = Note::find_by_sql($sql);

  // Set Links
  $link = Note::echo_link_set();

?>

<?php $page_title = "Contact Details"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('Contacts/index.php'); ?>"><i class="far fa-handshake"></i> Contacts</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-info-circle"></i> Contact Details</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <div class="row">

    <!-- Contact Card -->
    <div class="container col-12 mb-4">
      <!-- Messages -->
      <?php echo display_session_message(); ?>
      <div class="card">

        <!-- Card Header -->
        <div class="card-header text-secondary">
          <h2><i class="fas fa-info-circle"></i> Contact Details</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <!-- Main section Contacts -->
              <?php include('detail_section/Contact_detail.php'); ?>
            </div><!-- .col-sm-5  -->

            <!-- Group Pane Section -->
            <div class="col-sm-7">
              <div class="card bg-light">
                <div class="card-header">

                  <!-- Group Pane Tabs -->
                  <?php $selected = 'contact'; ?>
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
            <a href='<?php echo url_for('Contacts/new.php'); ?>' class="btn btn-outline-info"><i class="far fa-plus-square"></i> New Contact</a>
            <a href='<?php echo url_for('Contacts/delete.php?contact_id=' . $contact_id); ?>' class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete Contact</a>
            <a href='<?php echo url_for('Contacts/edit.php?contact_id=' . $contact_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Contact</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
