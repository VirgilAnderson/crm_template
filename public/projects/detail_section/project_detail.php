<!-- project detail -->
<ul class="list-group list-group-flush">
  <dl class="list-group-item">
    <h3><?php echo $project->project_name; ?></h3>
  </dl>
  <dl class="list-group-item">
    <dt>Project State</dt>
    <dd><?php echo $project->project_status; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Project Description</dt>
    <dd><?php echo $project->project_description; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Company</dt>
    <dd><?php echo $company->company_name; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Project Owner</dt>
    <dd><?php echo $user->user_username; ?></dd>
  </dl>
</ul> <!-- end project detail -->
