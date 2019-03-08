<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get contact_id if set
  $contact_id = $_GET['contact_id'] ?? false;

  // If contact_id is set, query db
  if($contact_id) {
    // Query db for contact record
    $contact = Contact::find_by_id($contact_id);
  } else {
    // if !$contact_id, redirect to contacts/index.php
    redirect_to(url_for('contacts/index.php'));
  }

  // Find all user query
  $sql = "SELECT * FROM user ";
  $sql .= "ORDER BY id DESC";
  $user = User::find_by_sql($sql);

  // Find all user companies query
  $sql = "SELECT * FROM company ";
  $sql .= "WHERE user_id=" . $session->user_id;
  $sql .= " ORDER BY id DESC";
  $company = Company::find_by_sql($sql);

  // Find all user projects
  $sql = "SELECT * FROM project ";
  $sql .= "WHERE user_id=" . $session->user_id;
  $sql .= " ORDER BY id DESC";
  $project = Project::find_by_sql($sql);

  // If post request, process the form
  if(is_post_request()) {
    // Edit record using post data
    $args = $_POST['contact'];
    $contact->merge_attributes($args);
    $result = $contact->save();

    if($result === true) {
      $session->message('The contact was updated successfully.');
      redirect_to(url_for('/contacts/detail.php?contact_id=' . $contact_id));
    } else {
      // show errors

    }
  }
?>

<?php $page_title = "Edit Contact"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('Contacts/index.php'); ?>"><i class="far fa-handshake"></i> Contacts</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('contacts/detail.php?contact_id=' . $contact_id); ?>"><i class="fas fa-info-circle"></i> Contact Detail</a></li>
    <li class="breadcrumb-item active"><i class="far fa-edit"></i> Edit Contact</li>
  </ol>

  <form class="col-sm-6" action="<?php echo url_for('contacts/edit.php?contact_id=' . $contact_id); ?>" method="post">
      <h2><i class="far fa-edit"></i> Edit Contact</h2>
      <fieldset class="form-group">
        <legend>Contact Information</legend>

        <?php include('form_fields.php'); ?>
        <button class="btn btn-outline-info" type="submit"><i class="far fa-edit"></i> Edit Contact</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container mt-4 -->


<?php include('../../private/shared/footer.php'); ?>
