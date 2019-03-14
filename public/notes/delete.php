<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get note ID if set
  $note_id = $_GET['note_id'] ?? false;

  // If note_id set, query db
  if($note_id) {
    // If set, query db
    $note = Note::find_by_id($note_id);
  } else {
    // if not set, redirect to home page
    redirect_to(url_for('index.php'));
  }

  // If post request, process the form
  if(is_post_request()) {
    // Delete
    $result = $note->delete();
    if($result === true) {
      $session->message('The note was successfully deleted.');
      redirect_to(url_for('index.php'));
    } else {
      echo 'error';
    }

  }

?>

<?php $page_title = "Delete lead"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('leads/index.php'); ?>"><i class="fas fa-dollar-sign"></i> Leads</a></li>
    <li class="breadcrumb-item"><a href=""><i class="fas fa-info-circle"></i> Lead Detail</a></li>
    <li class="breadcrumb-item active"><i class="far fa-trash-alt"></i> Delete Lead</li>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class="container">
  <div class="row">
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header text-secondary">
          <h2><i class="far fa-trash-alt"></i> Delete Note</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <p>Are you sure you want to delete?</p>
          <p><?php echo $note->note_name; ?></p>
          <form class="col-sm-6" action="<?php echo url_for('notes/delete.php?note_id=' . $note_id); ?>" method="post">
            <fieldset class="form-group">
              <button class="btn btn-outline-info" type="submit"><i class="far fa-trash-alt"></i> Delete</button>
            </fieldset><!-- fieldset -->
          </form>
        </div><!-- .card-body -->
        <div class="card-footer">
          <div class='btn-group'>
            <a href='<?php echo url_for('notes/detail.php?note_id=' . $note_id); ?>' class="btn btn-outline-info"><i class="fas fa-info-circle"></i> Note Detail</a>
            <a href='<?php echo url_for('tasks/edit.php?note_id=' . $note_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Note</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
