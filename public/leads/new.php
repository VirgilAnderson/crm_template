<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = "New lead"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('leads/index.php'); ?>"><i class="fas fa-dollar-sign"></i> Leads</a></li>
    <li class="breadcrumb-item active"><i class="far fa-plus-square"></i> New Lead</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <form class="col-sm-6" action=""  method="post">
      <h2><i class="far fa-plus-square"></i> New Lead</h2>
      <fieldset class="form-group">
        <legend>Fill in the form to create a new record</legend>

        <?php include('form_fields.php'); ?>

        <button class="btn btn-outline-info" type="submit"><i class="far fa-plus-square"></i> Add New Lead</button>

      </fieldset><!-- fieldset -->
    </form>
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
