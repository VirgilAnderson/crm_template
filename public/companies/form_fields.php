<div class="form-group">
  <label class="form-control-label" for="company_name">Company Name</label>
  <input class="form-control" type="text" name="company_name" >
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company_address">Company Address</label>
  <input class="form-control" type="text" name="company_address" >
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company_city">Company City</label>
  <input class="form-control" type="text" name="company_city" >
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company_state">Company State</label>
  <input class="form-control" type="text" name="company_state">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company_zip">Company Zip</label>
  <input class="form-control" type="text" name="company_zip">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company_url">Company url</label>
  <input class="form-control" type="text" name="company_url">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="company_phone">Phone</label>
  <input class="form-control" type="text" name="company_phone">
</div><!-- form-group -->

<div class="form-group">
  <label for="lead_source">Lead Owner:</label>
    <select class="form-control" name="user_id">
      <?php while($admin = mysqli_fetch_assoc($admin_set)){ ?>
      <option value="<?php echo h($admin['id']); ?>"><?php echo h($admin['username']); ?></option>
      <?php } ?>
    </select>
</div><!-- form-group -->
