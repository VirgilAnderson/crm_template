<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = "New lead"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('leads/index.php'); ?>"><i class="fas fa-dollar-sign"></i> Leads</a></li>
    <li class="breadcrumb-item active">New Lead</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>

  <?php include('form_fields.php'); ?>

</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
