<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  // Find all open user leads query
  $sql = "SELECT * FROM project ";
  $sql .= "WHERE user_id=" . $session->user_id;
  $sql .= " ORDER BY id DESC";
  $project = Project::find_by_sql($sql);

?>

<?php $page_title = "Projects"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-project-diagram"></i> Projects</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header text-secondary">
          <div class='row'>
            <div class='col-sm'>
              <h2><i class="fas fa-project-diagram"></i> Projects</h2>
            </div><!-- .col -->
            <div class='col-sm'>
              <!-- Search Form -->
              <form class="form-inline my-2 my-sm-0 d-flex justify-content-end">
                <input class="form-control mr-sm-2" type="text" placeholder="Search Projects...">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="button"><i class="fas fa-search"></i></button>
              </form>
            </div><!-- .col -->
          </div><!-- .row -->
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
              <thead class='thead-light'>
                <tr>
                  <th>Project Title</th>
                  <th>Project State</th>
                  <th>Company</th>
                  <th>Project Owner</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($project as $project) { ?>
                <tr class='clickable-row' data-href="<?php echo url_for('projects/detail.php?project_id=' . $project->id); ?>">
                  <td><?php echo $project->project_name; ?></td>
                  <td><?php echo $project->project_status; ?></td>
                  <?php if($project->company_id) {
                    // Search for company by id
                    $company = Company::find_by_id($project->company_id);
                  } ?>
                  <td><?php echo $company->company_name; ?></td>
                  <?php if($project->user_id) {
                    // Search for project owner
                    $user_id = $project->user_id;
                    $user = User::find_by_id($user_id);
                  } ?>
                  <td><?php echo $user->user_username; ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div><!-- .table-responsive -->

          <!-- pagination -->
          <ul class="pagination pagination-sm justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-backward"></i></a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-forward"></i></a>
            </li>
          </ul><!-- .pagination -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('projects/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> New Project</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
