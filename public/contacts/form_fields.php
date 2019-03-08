

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_first_name]">First Name</label>
        <input class="form-control" type="text" name="contact[contact_first_name]" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_last_name]">Last Name</label>
        <input class="form-control" type="text" name="contact[contact_last_name]" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_phone_number]">Phone</label>
        <input class="form-control" type="text" name="contact[contact_phone_number]" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_mobile_phone]">Mobile</label>
        <input class="form-control" type="text" name="contact[contact_mobile_phone]" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_assistant_phone]">Assistant Phone</label>
        <input class="form-control" type="text" name="contact[contact_assistant_phone]">
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_assistant_name]">Assistant Name</label>
        <input class="form-control" type="text" name="contact[contact_assistant_name]">
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_birthdate]">Contact Birthdate</label>
        <input class="form-control" type="text" name="contact[contact_birthdate]">
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_email]">Email</label>
        <input class="form-control" type="text" name="contact[contact_email]">
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_title]">Title</label>
        <input class="form-control" type="text" name="contact[contact_title]">
      </div><!-- form-group -->

      <div class="form-group">
        <label for="contact[lead_source]">Select list:</label>
          <select class="form-control" name="contact[lead_source]">
          </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="contact[company_id]">Company:</label>

            <select class="form-control" name="contact[company_id]">
              <?php foreach ($company as $company) {?>
                <option value='<?php echo $company->id; ?>'><?php echo $company->company_name; ?></option>
              <?php } ?>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="contact[project_id]">Project:</label>
            <select class="form-control" name="contact[project_id]">
              <?php foreach($project as $project) { ?>
                <option value='<?php echo $project->id; ?>'><?php echo $project->project_name; ?></option>
              <?php } ?>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="contact[user_id]">Lead Owner:</label>
          <select class="form-control" name="contact[user_id]">
            <?php foreach($user as $user) { ?>
              <option value="<?php echo $user->user_id; ?>" ><?php echo $user->user_username; ?></option>
            <?php } ?>
          </select>
      </div><!-- form-group -->
