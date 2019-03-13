<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();



  // Get all Set Id's
  include('../../private/shared/queries/get_set_ids.php');

  // If $_GET['note'] query note details else redirect
  if($note_id) {
    // Query Note by Id
    $note = Note::find_by_id($note_id);

    // Find all queries
    include('../../private/shared/queries/find_all.php');

  } else {
    redirect_to(url_for('notes/index.php'));
  }

  // If post request, process the form
  if(is_post_request()) {
    // Edit record using post data
    $args = $_POST['note'];
    $note->merge_attributes($args);
    $result = $note->save();

    if($result === true) {
      $session->message('The note was updated successfully.');
      redirect_to(url_for('/notes/detail.php?note_id=' . $note_id));
    } else {
      // show errors

    }
  }


?>

<?php $page_title = "Edit Note"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href=""><i class="fas fa-info-circle"></i> Note Details</a></li>
    <li class="breadcrumb-item active"><i class="far fa-edit"></i> Edit Note</li>
  </ol>

  <form class="col-sm-6" action="<?php ?>" method="post">
      <h2><i class="far fa-edit"></i> Edit Note</h2>
      <fieldset class="form-group">
        <legend>Note Information</legend>

        <?php include('form_fields.php'); ?>
        <button class="btn btn-outline-info" type="submit"><i class="far fa-edit"></i> Edit Note</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container mt-4 -->


<?php include('../../private/shared/footer.php'); ?>
