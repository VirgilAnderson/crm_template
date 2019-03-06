

      <div class="form-group">
        <label class="form-control-label" for="lead[lead_first_name]">First Name</label>
        <input class="form-control" type="text" name="lead[lead_first_name]" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="lead[lead_last_name]">Last Name</label>
        <input class="form-control" type="text" name="lead[lead_last_name]" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="lead[lead_phone_number]">Phone</label>
        <input class="form-control" type="text" name="lead[lead_phone_number]" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="lead[lead_mobile_phone]">Mobile</label>
        <input class="form-control" type="text" name="lead[lead_mobile_phone]" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="lead[lead_email]">Email</label>
        <input class="form-control" type="text" name="lead[lead_email]">
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="lead[lead_role]">Title</label>
        <input class="form-control" type="text" name="lead[lead_role]">
      </div><!-- form-group -->

      <div class="form-group">
        <label for="lead[lead_source]">Lead Source:</label>
          <select class="form-control" name="lead[lead_source]">
            <?php foreach(LEAD::LEAD_SOURCE_OPTIONS as $source) { ?>
              <option value='<?php echo $source; ?>'><?php echo $source; ?></option>
            <?php } ?>
          </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="lead[lead_company_name]">Company:</label>
            <select class="form-control" name="lead[lead_company_name]">
              <option value='none'>none</option>
              <option value="">Company</option>
            </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="lead[user_id]">Lead Owner:</label>
          <select class="form-control" name="lead[user_id]">
            <option value="" ></option>
          </select>
      </div><!-- form-group -->
