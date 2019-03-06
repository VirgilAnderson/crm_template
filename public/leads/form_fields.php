<div class="form-group">
  <label for="lead[lead_status]">Status:</label>
    <select class="form-control" name="lead[lead_status]">
      <?php foreach(LEAD::LEAD_STATUS as $status) { ?>
        <option value='<?php echo $status; ?>' <?php if($status == $lead->lead_status) { echo 'selected'; } ?>><?php echo $status; ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="lead[lead_first_name]">First Name</label>
  <input class="form-control" type="text" name="lead[lead_first_name]" value='<?php echo h($lead->lead_first_name); ?>'>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="lead[lead_last_name]">Last Name</label>
  <input class="form-control" type="text" name="lead[lead_last_name]" value='<?php echo h($lead->lead_last_name); ?>'>
</div><!-- form-group -->

<div class="form-group">
  <label for="lead[lead_company_name]">Company:</label>
      <select class="form-control" name="lead[lead_company_name]">
        <option value='none'>none</option>
        <option value="">Company</option>
      </select>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="lead[lead_address]">Address</el>
  <input class="form-control" type="text" name="lead[lead_address]" ue='<?php echo h($lead->lead_address); ?>'>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="lead[lead_city]">City</label>
  <input class="form-control" type="text" name="lead[lead_city]" value='<?php echo h($lead->lead_city); ?>'>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="lead[lead_state]">State</label>
  <input class="form-control" type="text" name="lead[lead_state]" value='<?php echo h($lead->lead_state); ?>'>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="lead[lead_zip_code]">Zip Code</label>
  <input class="form-control" type="text" name="lead[lead_zip_code]" value='<?php echo h($lead->lead_zip_code); ?>'>
</div><!-- form-group -->

<div class="form-group">
  <label for="lead[lead_role]">Title:</label>
    <select class="form-control" name="lead[lead_role]">
      <?php foreach(LEAD::LEAD_TITLE as $title) { ?>
        <option value='<?php echo $title; ?>' <?php if($title == $lead->lead_role) {echo 'selected'; } ?>><?php echo $title; ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="lead[lead_email]">Email</label>
  <input class="form-control" type="text" name="lead[lead_email]" value='<?php echo h($lead->lead_email); ?>'>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="lead[lead_phone_number]">Phone</label>
  <input class="form-control" type="text" name="lead[lead_phone_number]" value='<?php echo h($lead->lead_phone_number); ?>'>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="lead[lead_mobile_phone]">Mobile</label>
  <input class="form-control" type="text" name="lead[lead_mobile_phone]" value='<?php echo h($lead->lead_mobile_phone); ?>'>
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
  <label for="lead[lead_date]">Lead Creation Date:</label>
    <select class="form-control" name="lead[lead_date]">
        <option value='
          <?php
            // If date is set echo date
            if($lead->lead_date) {
              echo $lead->lead_date;
            } else {
              // else echo today's date
              echo date("Y/m/d");
            }
         ?>
         '>
         <?php
         // If date is set echo date
         if($lead->lead_date) {
           echo $lead->lead_date;
         } else {
           // else echo today's date
           echo date("Y/m/d");
         }
          ?>
        </option>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="lead[user_id]">Lead Owner:</label>
    <select class="form-control" name="lead[user_id]">
      <?php foreach($user as $user) { ?>
        <option value='<?php echo $user->id; ?>' <?php if($user->user_username == $session->username) {echo 'selected'; } ?>><?php echo $user->user_username; ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->
