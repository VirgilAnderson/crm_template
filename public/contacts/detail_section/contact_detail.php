<!-- contact detail -->
<ul class="list-group list-group-flush">
  <dl class="list-group-item">
    <h3><?php echo $contact->full_name(); ?></h3>
  </dl>
  <dl class="list-group-item">
    <dt>First Name</dt>
    <dd><?php echo $contact->contact_first_name; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Last Name</dt>
    <dd><?php echo $contact->contact_last_name; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Phone</dt>
    <dd><?php echo $contact->contact_phone_number; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Mobile</dt>
    <dd><?php echo $contact->contact_mobile_phone; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Email</dt>
    <dd><?php echo $contact->contact_email; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Title</dt>
    <dd><?php echo $contact->contact_title; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Lead source</dt>
    <dd><?php echo $contact->contact_lead_source; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Lead Owner</dt>
    <dd><?php echo $contact->user_id; ?></dd>
  </dl>
</ul> <!-- end contact detail -->
