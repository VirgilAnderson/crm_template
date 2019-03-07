<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Get company id, if not set redireect back to companies/index.php
  $company_id = $_GET['company_id'] ?? false;
  if(!$company_id) {
    redirect_to(url_for('companies/index.php'));
  }

  // Search for company by id
  $company = Company::find_by_id($company_id);

  // Search for the company user
  $user_id = $company->user_id;
  $user = User::find_by_id($user_id);

  // Search for project by id
  $project = Project::find_project_by_company_id($company->id);

?>

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

    <!-- Contact Card -->
    <div class="container col-12 mb-4">
      <div class="card">

        <!-- Card Header -->
        <div class="card-header text-secondary">
          <h2><i class="fas fa-info-circle"></i> Company Details</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <!-- Main section Contacts -->
              <?php include('detail_section/company_detail.php'); ?>
            </div><!-- .col-sm-5  -->

            <!-- Group Pane Section -->
            <div class="col-sm-7">
              <div class="card bg-light">
                <div class="card-header">

                  <!-- Group Pane Tabs -->
                  <?php $selected = 'company'; ?>
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
          <div class='btn-group'>
            <a href='<?php echo url_for('Companies/delete.php?company_id=' . $company_id); ?>' class="btn btn-outline-info"><i class="far fa-trash-alt"></i> Delete Company</a>
            <a href='<?php echo url_for('Companies/edit.php?company_id=' . $company_id); ?>' class="btn btn-outline-info"><i class="far fa-edit"></i> Edit Company</a>
          </div><!-- .btn-group -->
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
