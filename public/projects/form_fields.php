<div class="form-group">
  <label class="form-control-label" for="project_title">Project Title</label>
  <input class="form-control" type="text" name="project_title" >
</div><!-- .form-group -->

<div class="form-group">
  <label for="project_state">Project State</label>
      <select class="form-control" name="project_state">
        <option value="Not Started">Not Started</option>
        <option value="In Progress">In Progress</option>
        <option value="Complete">Complete</option>
        <option value="Postponed">Postponed</option>
        <option value="Cancelled">Cancelled</option>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="project_description">Project Description</label>
  <textarea class="form-control" rows="5" name="project_description"></textarea>
</div><!-- .form-group -->

<div class="form-group">
  <label for="company_id">Company:</label>
    <select class="form-control" name="company_id">
        <option value='none'>none</option>
        <option value="">Company Name</option>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="user_id">project Owner:</label>
    <select class="form-control" name="user_id">
      <option value="" >Username</option>
    </select>
</div><!-- form-group -->
