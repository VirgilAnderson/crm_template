<!-- Company Detail -->
<ul class="list-group list-group-flush">
  <dl class="list-group-item">
    <h3><?php echo $company->company_name; ?></h3>
  </dl>
  <dl class="list-group-item">
    <dt>Address</dt>
    <dd><?php echo $company->company_address; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>City</dt>
    <dd><?php echo $company->company_city; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>State</dt>
    <dd><?php echo $company->company_state; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Zip</dt>
    <dd><?php echo $company->company_zip_code; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Company Phone</dt>
    <dd><?php echo $company->company_phone; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>URL</dt>
    <dd><a href='http://<?php echo $company->company_url; ?>' target='_blank'><?php echo $company->company_url; ?></a></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Industry</dt>
    <dd><?php echo $company->company_industry; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Company Owner</dt>
    <dd><?php echo $user->user_username; ?></dd>
  </dl>
</ul> <!-- end company detail -->
