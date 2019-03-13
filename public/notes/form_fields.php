      <div class="form-group">
        <label class="form-control-label" for="note[note_name]">Note Name</label>
        <input class="form-control" type="text" name="note[note_name]" value='<?php echo $note->note_name; ?>'>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="note[note_description]">Note Description:</label>
        <textarea class="form-control" rows="5" name="note[note_description]"><?php echo $note->note_description; ?></textarea>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="note[company_id]">Company:</label>
            <select class="form-control" name="note[company_id]">
              <?php foreach($company as $company) { ?>
                <option value='<?php echo $company->id; ?>' <?php if($company_id == $company->id) { echo 'selected'; } ?>><?php echo $company->company_name; ?></option>
              <?php } ?>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="note[lead_id]">Lead:</label>
            <select class="form-control" name="note[lead_id]">
              <?php foreach($lead as $lead) { ?>
                <option value='<?php echo $lead->id; ?>' <?php if($lead->id == $lead_id) { echo 'selected'; } ?>><?php echo $lead->full_name(); ?></option>
             <?php } ?>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="note[contact_id]">Contact:</label>
            <select class="form-control" name="note[contact_id]">
              <?php foreach($contact as $contact) { ?>
                <option value='<?php echo $contact->id; ?>' <?php if($contact->id == $contact_id) { echo 'selected'; } ?>><?php echo $contact->full_name(); ?></option>
              <?php } ?>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="note[project_id]">Project:</label>
            <select class="form-control" name="note[project_id]">
              <?php foreach($project as $project) { ?>
               <option value='<?php echo $project->id; ?>' <?php if($project->id == $project_id) { echo 'selected'; }?>><?php echo $project->project_name; ?></option>
             <?php } ?>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="note[task_id]">Task:</label>
            <select class="form-control" name="note[task_id]">
              <?php foreach($task as $task) { ?>
               <option value='<?php echo $task->id; ?>' <?php if($task->id == $task_id) { echo 'selected'; }?>><?php echo $task->task_name; ?></option>
             <?php } ?>
            </select>
      </div><!-- form-group -->
