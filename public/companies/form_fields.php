<div class="form-group">
  <label class="form-control-label" for="company[company_name]">Company Name</label>
  <input class="form-control" type="text" name="company[company_name]" >
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company[company_addres]">Company Address</label>
  <input class="form-control" type="text" name="company[company_address]" >
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company[company_city]">Company City</label>
  <input class="form-control" type="text" name="company[company_city]" >
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company[company_state]">Company State</label>
  <input class="form-control" type="text" name="company[company_state]">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company[company_zip_code]">Company Zip</label>
  <input class="form-control" type="text" name="company[company_zip_code]">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company[company_phone]">Company phone</label>
  <input class="form-control" type="text" name="company[company_phone]">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company[company_fax]">Company fax</label>
  <input class="form-control" type="text" name="company[company_fax]">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company[company_url]">Company url</label>
  <input class="form-control" type="text" name="company[company_url]">
</div><!-- form-group -->

<div class="form-group">
  <label for="">Industry:</label>
    <select class="form-control" name="">
      <?php foreach(COMPANY::INDUSTRY_OPTIONS as $industry) { ?>
      <option value=""></option>
      <?php } ?>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="lead_source">Company Owner:</label>
    <select class="form-control" name="company[company_]">
      <?php foreach($user as $user) { ?>
        <option value='<?php echo $user->id; ?>' <?php if($user->user_username == $session->username) {echo 'selected'; } ?>><?php echo $user->user_username; ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->
