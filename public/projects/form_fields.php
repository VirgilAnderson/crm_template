<div class="form-group">
  <label class="form-control-label" for="project[project_name]">Project Title</label>
  <input class="form-control" type="text" name="project[project_name]" >
</div><!-- .form-group -->

<div class="form-group">
  <label for="project[project_status]">Project State</label>
      <select class="form-control" name="project[project_status]">
        <option value="Not Started">Not Started</option>
        <option value="In Progress">In Progress</option>
        <option value="Complete">Complete</option>
        <option value="Postponed">Postponed</option>
        <option value="Cancelled">Cancelled</option>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="project[project_description]">Project Description</label>
  <textarea class="form-control" rows="5" name="project[project_description]"></textarea>
</div><!-- .form-group -->

<div class="form-group">
  <label for="project[company_id]">Company:</label>
    <select class="form-control" name="project[company_id]">
      <?php foreach($company as $company) { ?>
        <option value='<?php echo $company->id ?>'><?php echo $company->company_name; ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="project[user_id]">project Owner:</label>
    <select class="form-control" name="project[user_id]">
      <?php foreach($user as $user) { ?>
        <option value='<?php echo $user->id; ?>' <?php if($user->user_username == $session->username) {echo 'selected'; } ?>><?php echo $user->user_username; ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->
