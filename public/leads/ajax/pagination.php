<?php require_once('../../../private/initialize.php'); ?>
<?php
  // Simulate a slow server with sleep
  // sleep(2);

  function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }
  if(!is_ajax_request()) { exit; }


    $uid = $_GET['uid'];
    $user = User::find_by_id($uid);
    $page = $_GET['page'] ?? 1;

    // Pagination
    $per_page = 5;
    $total_count = Lead::count_all_user_records($user->id);
    $pagination = new Pagination($page, $per_page, $total_count);
    $total_pages = $pagination->total_pages();

    // Find all open user leads query
    $sql = "SELECT * FROM lead ";
    $sql .= "WHERE user_id=" . $user->id;
    $sql .= " AND lead_status!='Closed' ";
    $sql .= " AND lead_status!='Closed - Disqualified' ";
    $sql .= " AND lead_status!='Closed - Not Interested' ";
    $sql .= " ORDER BY id DESC ";
    $sql .= "LIMIT {$per_page} ";
    $sql .= "OFFSET {$pagination->offset()} ";
    $lead = Lead::find_by_sql($sql);

?>

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
  <?php
    if($total_pages > 1) {
      echo "<ul class=\"pagination pagination-sm justify-content-center\">";

      $url = url_for('/leads/ajax.php');
      echo $pagination->previous_link($url);
      echo $pagination->number_links($url);
      echo $pagination->next_link($url);
      echo "</ul><!-- .pagination -->";
    }
  ?>
</div><!-- .table-responsive -->
