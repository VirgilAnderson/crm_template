<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = "Company Details"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('companies/index.php'); ?>"><i class="far fa-building"></i> Companies</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-info-circle"></i> Company Detail</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <div class="row">

    <!-- Lead Card -->
    <div class="container col-12 mb-4">
      <div class="card">

        <!-- Card Header -->
        <div class="card-header">
          <h2><i class="fas fa-info-circle"></i> Company Details</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <!-- Main section Leads -->
              <?php include('detail_section/company_detail.php'); ?>
            </div><!-- .col-sm-5  -->

            <!-- Group Pane Section -->
            <div class="col-sm-7">
              <div class="card bg-light">
                <div class="card-header">

                  <!-- Group Pane Tabs -->
                  <?php include('detail_section/group_tabs.php'); ?>
                </div><!-- .card-header -->

                <!-- Group pane content -->
                <div class="card-body">
                  <div class="tab-content">
                    <?php $active = 'lead'; ?>
                    <?php include('../../private/shared/detail_panes/lead_pane.php'); ?>
                    <?php include('../../private/shared/detail_panes/task_pane.php'); ?>
                    <?php include('../../private/shared/detail_panes/project_pane.php'); ?>
                    <?php include('../../private/shared/detail_panes/history_pane.php'); ?>
                    <?php include('../../private/shared/detail_panes/note_pane.php'); ?>
                  </div><!-- .tab-content -->
                </div><!-- .card-body -->
              </div><!-- .card -->
            </div><!-- .col-7 -->
          </div><!-- .row -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <div class="btn-group">
            <button type="button" class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete Company</button>
            <button type="button" class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Company</button>
          </div>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
