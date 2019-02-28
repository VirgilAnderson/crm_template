<div id="project_pane" class="container tab-pane"><br>
  <ul class="list-group list-group-flush">
    <dl class="list-group-item d-flex bg-light" >

      <dt class="mr-4">Project Title</dt>
      <dd><a href="">Project Title</a></dd>
    </dl>

    <dl class="list-group-item d-flex bg-light">
      <dt class="mr-4">Project State</dt>
      <dd>Project State</dd>
    </dl>

    <dl class="list-group-item d-flex bg-light">
      <dt class="mr-4">Project Description</dt>
      <dd>Project Description</dd>
    </dl>

    <dl class="list-group-item d-flex bg-light">
      <dt class="mr-4">Company</dt>
      <dd>Company Name</dd>
    </dl>

    <dl class="list-group-item d-flex bg-light">
      <dt class="mr-4">Employee</dt>
      <dd>First Name Last Name</dd>
    </dl>

    <dl class="list-group-item d-flex bg-light">
      <dt class="mr-4">Project Owner</dt>
      <dd>Username</dd>
    </dl>

    <dl class="list-group-item d-flex">
      <dt class="mr-4">
        <a class="card-link mr-4" href="">Delete Project</a>
      </dt>
      <dt>
        <a class="card-link" href="">Edit Project</a>
      </dt>
    </dl>
  </ul>

  <!-- link to project -->
  <form class="col-sm-12" action="" method="post" >
    <fieldset class="form-group">
    <legend>Add to project</legend>

    <div class="form-group">
      <label for="project_id">Select list:</label>
          <select class="form-control" name="project_id">
            <option value="none">none</option>
            <option value="">Project Title</option>
        </select>
    </div><!-- form-group -->

    <button class="btn btn-outline-info" type="submit" name="insert_project">Add to project</button>
    </fieldset><!-- fieldset -->
  </form>

</div><!-- #project_pane -->
