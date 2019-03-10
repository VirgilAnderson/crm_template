<div class="form-group">
  <label class="form-control-label" for="task[task_name]">Task Name</label>
  <input class="form-control" type="text" name="task[task_name]" >
</div><!-- form-group -->

<div class="form-group">
  <label for="task[task_type]">Task Type</label>
      <select class="form-control" name="task[task_type]">
        <?php foreach(TASK::TASK_TYPE as $task_type_option){ ?>
          <option value='<?php echo $task_type_option; ?>'><?php echo $task_type_option; ?></option>
        <?php } ?>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="task[task_status]">Task State</label>
      <select class="form-control" name="task[task_status]">
        <?php foreach(TASK::TASK_STATUS as $status) { ?>
        <option value='<?php echo $status; ?>'><?php echo $status; ?></option>
        <?php } ?>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="task[task_description]">Task Description:</label>
  <textarea class="form-control" rows="5" name="task[task_description]"></textarea>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="task[task_due_date]">Due Date</label>
  <input class="form-control" type="datetime-local" name="task[task_due_date]">
</div><!-- form-group -->

<div class="form-group">
  <label for="task[company_id]">Company:</label>
    <select class="form-control" name="task[company_id]">
      <?php foreach($company as $company) { ?>
        <option value='<?php echo $company->id; ?>'><?php echo $company->company_name; ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="task[project_id]">Project:</label>
    <select class="form-control" name="task[project_id]">
        <?php foreach($project as $project) {?>
          <option value='<?php echo $project->id; ?>'><?php echo $project->project_name; ?></option>
        <?php  } ?>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="task[contact_id]">Contact</label>
    <select class="form-control" name="task[contact_id]">
      <?php foreach($contact as $contact) { ?>
        <option value="<?php echo $contact->id; ?>" ><?php echo $contact->full_name(); ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="task[lead_id]">Lead</label>
    <select class="form-control" name="task[lead_id]">
      <?php foreach($lead as $lead) { ?>
        <option value="<?php echo $lead->id; ?>" ><?php echo $lead->full_name(); ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="task[user_id]">Task Owner</label>
    <select class="form-control" name="task[user_id]">
      <?php foreach($user as $user ) {?>
        <option value="<?php echo $user->id; ?>" ><?php echo $user->user_username; ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->
