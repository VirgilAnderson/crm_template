<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Find all user query
  include('../../private/shared/queries/find_all.php');

  // Get all Set Id's
  include('../../private/shared/queries/get_set_ids.php');

  // If Post Request Process form
  if(is_post_request()) {
    // Get input data
    $args = $_POST['note'];
    $note = new Note($args);
    $result = $note->save();

    // Verify success
    if($result === true){
      $new_id = $note->id;
      // Add session message
      $session->message('Note was created successfully');
      redirect_to(url_for('notes/detail.php?note_id=' . $new_id));
    } else {
      echo 'error <br>';
      foreach($args as $arg => $arg_value){
        echo $arg . ': ' . $arg_value . '<br>';
      }
    }
  } else {
    // Display blank Form
    $note = new Note;
  }


?>

<?php $page_title = "New Note"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item active"><i class="far fa-plus-square"></i> New Note</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <form class="col-sm-6" action="<?php echo url_for('notes/new.php'); ?>"  method="post">
      <h2><i class="far fa-plus-square"></i> New Note</h2>
      <fieldset class="form-group">
        <legend>Fill in the form to add a note</legend>

        <?php include('form_fields.php'); ?>

        <button class="btn btn-outline-info" type="submit"><i class="far fa-plus-square"></i> Add New Note</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
