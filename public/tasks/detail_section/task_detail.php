<!-- task detail -->
<ul class="list-group list-group-flush">
  <dl class="list-group-item">
    <h3><?php echo $task->task_name; ?></h3>
  </dl>
  <dl class="list-group-item">
    <dt>Type</dt>
    <dd><?php echo $task->task_type; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Status</dt>
    <dd><?php echo $task->task_status; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Description</dt>
    <dd><?php echo $task->task_description; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Due Date</dt>
    <dd><?php echo $task->task_due_date; ?></dd>
  </dl>
</ul> <!-- end task detail -->
