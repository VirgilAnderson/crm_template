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

  // If post request, process the form
  if(is_post_request()) {
    // Delete
    $result = $contact->delete();
    $session->message('The contact was successfully deleted.');
    redirect_to(url_for('/contacts/index.php'));
  }

?>

<?php $page_title = "Delete Contact"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('Contacts/index.php'); ?>"><i class="far fa-handshake"></i> Contacts</a></li>
    <li class="breadcrumb-item"><a href=""><i class="fas fa-info-circle"></i> Contact Detail</a></li>
    <li class="breadcrumb-item active"><i class="far fa-trash-alt"></i> Delete Contact</li>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class="container">
  <div class="row">
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header text-secondary">
          <h2><i class="far fa-trash-alt"></i> Delete Contact</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <p>Are you sure you want to delete?</p>
          <h4><?php echo $contact->full_name(); ?></h4>
          <form class="col-sm-6" action="" method="post">
            <fieldset class="form-group mt-3">
              <button class="btn btn-outline-info" type="submit"><i class="far fa-trash-alt"></i> Delete</button>
            </fieldset><!-- fieldset -->
          </form>
        </div><!-- .card-body -->
        <div class="card-footer">
          <div class='btn-group'>
            <a href='<?php echo url_for('contacts/detail.php?contact_id=' . $contact_id); ?>' class="btn btn-outline-info"><i class="fas fa-info-circle"></i> Contact Detail</a>
            <a href='<?php echo url_for('contacts/edit.php?contact_id=' . $contact_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Contact</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
