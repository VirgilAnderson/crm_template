<form class="col-sm-6" action=""  method="post">
    <h2>New Lead</h2>
    <fieldset class="form-group">
      <legend>Fill in the form to create a new record</legend>

      <div class="form-group">
        <label class="form-control-label" for="first_name">First Name</label>
        <input class="form-control" type="text" name="first_name" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="last_name">Last Name</label>
        <input class="form-control" type="text" name="last_name" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="phone_direct">Phone</label>
        <input class="form-control" type="text" name="phone_direct" >
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="email">Email</label>
        <input class="form-control" type="text" name="email">
      </div><!-- form-group -->

      <div class="form-group">
        <label class="form-control-label" for="role">Role</label>
        <input class="form-control" type="text" name="role">
      </div><!-- form-group -->

      <div class="form-group">
        <label for="lead_source">Select list:</label>
          <select class="form-control" name="lead_source">
            <option>Web</option>
            <option>Manual Entry</option>
            <option>Lead List</option>
            <option>Call In</option>
          </select>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="company_id">Company:</label>
            <select class="form-control" name="company_id">
              <option value='none'>none</option>
              <option value="">Company</option>
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
        <label for="lead_source">Lead Owner:</label>
          <select class="form-control" name="user_id">
            <option value="" ></option>
          </select>
      </div><!-- form-group -->

      <button class="btn btn-outline-info" type="submit">Create New Lead</button>

    </fieldset><!-- fieldset -->
  </form>