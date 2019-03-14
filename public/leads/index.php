<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();

  $uid = $session->user_id;
  $user = User::find_by_id($uid);

  // Pagination
  $current_page = $_GET['page'] ?? 1;
  $per_page = 15;
  $total_count = Lead::count_all_user_leads($uid);

  $pagination = new Pagination($current_page, $per_page, $total_count);

  // Find all open user leads query
  $sql = "SELECT * FROM lead ";
  $sql .= "WHERE user_id=" . $session->user_id;
  $sql .= " AND lead_status!='Closed' ";
  $sql .= " AND lead_status!='Closed - Disqualified' ";
  $sql .= " AND lead_status!='Closed - Not Interested' ";
  $sql .= " ORDER BY id DESC ";
  $sql .= "LIMIT {$per_page} ";
  $sql .= "OFFSET {$pagination->offset()} ";
  $lead = Lead::find_by_sql($sql);

  $total_pages = $pagination->total_pages();
?>

<?php $page_title = "Leads"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-dollar-sign"></i> Leads</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header text-secondary">
          <div class='row'>
            <div class='col-sm'>
              <h2><i class="fas fa-dollar-sign"></i> Leads</h2>
            </div><!-- .col -->
          </div><!-- .row -->
        </div><!-- .card-header -->
        <div class="card-body">
          <div class='col-sm mb-3'>
            <!-- Search Form -->
            <form class="form-inline my-2 my-sm-0 d-flex justify-content-end">
              <input class="form-control mr-sm-2" type="text" placeholder="Search Leads...">
              <button class="btn btn-outline-dark my-2 my-sm-0" type="button"><i class="fas fa-search"></i></button>
            </form>
          </div><!-- .col-sm -->
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
              <thead class='thead-light'>
                <tr>
                  <th></th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Role</th>
                  <th>Lead Source</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($lead as $lead) { ?>
                <tr class='clickable-row' data-href="<?php echo url_for('leads/detail.php?lead_id=' . $lead->id); ?>">
                  <td><span class='badge badge-info'>new</span></td>
                  <td><?php echo $lead->lead_first_name; ?></td>
                  <td><?php echo $lead->lead_last_name; ?></td>
                  <td><?php echo $lead->lead_role; ?></td>
                  <td><?php echo $lead->lead_source; ?></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div><!-- .table-responsive -->

          <!-- pagination -->
          <?php
            if($total_pages > 1) {
              echo "<ul class=\"pagination pagination-sm justify-content-center\">";

              $url = url_for('/leads/index.php');
              echo $pagination->previous_link($url);
              echo $pagination->number_links($url);
              echo $pagination->next_link($url);
              echo "</ul><!-- .pagination -->";
            }
          ?>

        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('leads/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> new lead</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
