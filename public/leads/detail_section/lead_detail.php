<!-- lead detail -->
<ul class="list-group list-group-flush">
  <dl class="list-group-item">
    <h3><?php echo $lead->full_name(); ?></h3>
  </dl>
  <dl class="list-group-item">
    <dt>Lead Status</dt>
    <dd><?php echo $lead->lead_status; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>First Name</dt>
    <dd><?php echo $lead->lead_first_name; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Last Name</dt>
    <dd><?php echo $lead->lead_last_name; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Phone</dt>
    <dd><?php echo $lead->lead_phone_number; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Mobile</dt>
    <dd><?php echo $lead->lead_mobile_phone; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Email</dt>
    <dd><?php echo $lead->lead_email; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Address</dt>
    <dd><?php echo $lead->lead_address; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>City</dt>
    <dd><?php echo $lead->lead_city; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>State</dt>
    <dd><?php echo $lead->lead_state; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Zip Code</dt>
    <dd><?php echo $lead->lead_zip_code; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Title</dt>
    <dd><?php echo $lead->lead_role; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Lead source</dt>
    <dd><?php echo $lead->lead_source; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Date Created</dt>
    <dd>
      <?php
        // Convert date to month/day/year
        $time = strtotime($lead->lead_date);
        echo date("m/d/Y", $time);
      ?>
    </dd>
  </dl>
  <dl class="list-group-item">
    <dt>Lead Owner</dt>
    <dd><?php echo $user->user_username; ?></dd>
  </dl>
</ul> <!-- end lead detail -->
