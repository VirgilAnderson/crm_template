<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

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

  // If Post Request Process form
  if(is_post_request()) {
    // Get input data
    $args = $_POST['contact'];
    $contact = new Contact($args);
    $result = $contact->save();

    // Verify success
    if($result === true){
      $new_id = $contact->id;
      // Add session message
      $session->message('Contact was created successfully');
      redirect_to(url_for('contacts/detail.php?contact_id=' . $new_id));
    } else {
      echo 'error';
    }

  } else {
    // Display blank Form
    $contact = new Contact;

  }

?>

<?php $page_title = "New Contact"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('Contacts/index.php'); ?>"><i class="far fa-handshake"></i> Contacts</a></li>
    <li class="breadcrumb-item active"><i class="far fa-plus-square"></i> New Contact</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <form class="col-sm-6" action=""  method="post">
      <h2><i class="far fa-handshake"></i> New Contact</h2>
      <fieldset class="form-group">
        <legend>Fill in the form to create a new record</legend>

        <?php include('form_fields.php'); ?>

        <button class="btn btn-outline-info" type="submit"><i class="far fa-plus-square"></i> Create New Contact</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
