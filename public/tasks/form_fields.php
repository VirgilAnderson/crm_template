<div class="form-group">
  <label class="form-control-label" for="task_name">Task Name</label>
  <input class="form-control" type="text" name="task_name" >
</div><!-- form-group -->

<div class="form-group">
  <label for="task_type">Task Type</label>
      <select class="form-control" name="task_type">
        <option>Call</option>
        <option>Email</option>
        <option>Follow Up</option>
        <option>Meeting</option>
        <option>Get Started</option>
        <option>To Do</option>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="task_state">Task State</label>
      <select class="form-control" name="task_state">
        <option>Open</option>
        <option>Closed</option>
        <option>In Progress</option>
        <option>Waiting On Someone Else</option>
        <option>Not Started</option>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="task_description">Task Description:</label>
  <textarea class="form-control" rows="5" name="task_description"></textarea>
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="due_date">Due Date</label>
  <input class="form-control" type="datetime-local" name="due_date">
</div><!-- form-group -->

<div class="form-group">
  <label for="task_source">Company:</label>
    <select class="form-control" name="company_id">
        <option value='none'>none</option>
        <option value="">Company Name</option>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="project_id">Project:</label>
    <select class="form-control" name="project_id">
        <option value='none'>none</option>
        <option value="">Project Title</option>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="task_source">Employee:</label>
    <select class="form-control" name="individual_id">
        <option value='none'>none</option>
        <option value="">First_Name Last_Name</option>
    </select>
</div><!-- form-group -->

<div class="form-group">
  <label for="task_source">Task Owner:</label>
    <select class="form-control" name="user_id">
      <option value="" >Username</option>
    </select>
</div><!-- form-group -->
