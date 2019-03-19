<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  $uid = $session->user_id;
  $user = User::find_by_id($uid);

  // Pagination
  $current_page = $_GET['page'] ?? 1;
  $per_page = 15;
  $total_count = Project::count_all_user_records($uid);
  $pagination = new Pagination($current_page, $per_page, $total_count);
  $total_pages = $pagination->total_pages();

  // Find all open user leads query
  $sql = "SELECT * FROM project ";
  $sql .= "WHERE user_id=" . $session->user_id;
  $sql .= " ORDER BY id DESC ";
  $sql .= "LIMIT {$per_page} ";
  $sql .= "OFFSET {$pagination->offset()} ";
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
          </div><!-- .row -->
        </div><!-- .card-header -->
        <div class="card-body">
          <div class='col-sm mb-3'>
            <!-- Search Form -->
            <form class="form-inline my-2 my-sm-0 d-flex justify-content-end">
              <input class="form-control mr-sm-2" type="text" placeholder="Search Projects...">
              <button class="btn btn-outline-dark my-2 my-sm-0" type="button"><i class="fas fa-search"></i></button>
            </form>
          </div><!-- .col -->
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
          <?php
            if($total_pages > 1) {
              echo "<ul class=\"pagination pagination-sm justify-content-center\">";

              $url = url_for('/projects/index.php');
              echo $pagination->previous_link($url);
              echo $pagination->number_links($url);
              echo $pagination->next_link($url);
              echo "</ul><!-- .pagination -->";
            }
          ?><!-- .pagination -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('projects/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> New Project</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
