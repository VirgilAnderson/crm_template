

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_first_name]">First Name</label>
        <input class="form-control" type="text" name="contact[contact_first_name]" value='<?php echo $contact->contact_first_name; ?>'>
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_last_name]">Last Name</label>
        <input class="form-control" type="text" name="contact[contact_last_name]" value='<?php echo $contact->contact_last_name; ?>'>
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_phone_number]">Phone</label>
        <input class="form-control" type="text" name="contact[contact_phone_number]" value='<?php echo $contact->contact_phone_number; ?>'>
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_mobile_phone]">Mobile</label>
        <input class="form-control" type="text" name="contact[contact_mobile_phone]" value='<?php echo $contact->contact_mobile_phone; ?>'>
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_assistant_phone]">Assistant Phone</label>
        <input class="form-control" type="text" name="contact[contact_assistant_phone]" value='<?php echo $contact->contact_assistant_phone; ?>'>
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_assistant_name]">Assistant Name</label>
        <input class="form-control" type="text" name="contact[contact_assistant_name]" value='<?php echo $contact->contact_assistant_name; ?>'>
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_birthdate]">Contact Birthdate</label>
        <input class="form-control" type="text" name="contact[contact_birthdate]" value='<?php echo $contact->contact_birthdate; ?>'>
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="contact[contact_email]">Email</label>
        <input class="form-control" type="text" name="contact[contact_email]" value='<?php echo $contact->contact_email; ?>'>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="contact[contact_title]">Title</label>
            <select class="form-control" name="contact[contact_title]">
              <?php foreach (CONTACT::CONTACT_TITLE as $titles) {?>
                <option value='<?php echo $titles; ?>' <?php if($titles == $contact->contact_title) { echo 'selected'; } ?>><?php echo $titles; ?></option>
              <?php } ?>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="contact[contact_lead_source]">Contact Source</label>
            <select class="form-control" name="contact[contact_lead_source]">
              <?php foreach (CONTACT::CONTACT_SOURCE_OPTIONS as $source) {?>
                <option value='<?php echo $source; ?>' <?php if($source == $contact->contact_lead_source) { echo 'selected'; } ?>><?php echo $source; ?></option>
              <?php } ?>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="contact[company_id]">Company:</label>
            <select class="form-control" name="contact[company_id]">
              <?php foreach ($company as $company) {?>
                <option value='<?php echo $company->id; ?>' <?php if($company->id == $contact->company_id) { echo 'selected'; } ?>><?php echo $company->company_name; ?></option>
              <?php } ?>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="contact[project_id]">Project:</label>
            <select class="form-control" name="contact[project_id]">
              <?php foreach($project as $project) { ?>
                <option value='<?php echo $project->id; ?>' <?php if($project->id == $contact->project_id) { echo 'selected'; } ?>><?php echo $project->project_name; ?></option>
              <?php } ?>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="contact[user_id]">Lead Owner:</label>
          <select class="form-control" name="contact[user_id]">
            <?php foreach($user as $user) { ?>
              <option value="<?php echo $user->id; ?>" <?php if($user->id == $contact->user_id) { echo 'selected'; } ?>><?php echo $user->user_username; ?></option>
            <?php } ?>
          </select>
      </div><!-- form-group -->
