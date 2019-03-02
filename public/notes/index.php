<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = "Note Details"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-info-circle"></i> Note Details</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <div class="row">

    <!-- Note Card -->
    <div class="container col-12 mb-4">
      <div class="card">

        <!-- Card Header -->
        <div class="card-header">
          <h2><i class="fas fa-info-circle"></i> Note Details</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <!-- Main section Notes -->
              <?php include('detail_section/Note_detail.php'); ?>
            </div><!-- .col-sm-5  -->

            <!-- Group Pane Section -->
            <div class="col-sm-7">
              <div class="card bg-light">
                <div class="card-header">

                  <!-- Group Pane Tabs -->
                  <?php $selected = 'note'; ?>
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
          <div class="btn-group">
            <form action='<?php echo url_for('notes/new.php'); ?>'>
              <button type="submit" class="btn btn-outline-info"><i class="far fa-plus-square"></i> New Note</button>
            </form>
            <form action='<?php echo url_for('notes/delete.php'); ?>'>
              <button type="submit" class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete Note</button>
            </form>
            <form action='<?php echo url_for('notes/edit.php'); ?>'>
              <button type="submit" class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Note</button>
            </form>
          </div>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
