<div id="company_pane" class="container tab-pane"><br>
  <ul class="list-group list-group-flush">
    <dl class="list-group-item d-flex bg-light">
      <dt class="mr-4">Company Name</dt>
      <dd><a href="">Company Name</a></dd>
    </dl>
    <dl class="list-group-item d-flex bg-light">
      <dt class="mr-4">Address</dt>
      <dd>Company Address</dd>
    </dl>
    <dl class="list-group-item d-flex bg-light">
      <dt class="mr-4">URL</dt>
      <dd><a href='http://' target="_blank">Company URL</a></dd>
    </dl>
    <dl class="list-group-item d-flex bg-light">
      <dt class="mr-4">Phone</dt>
      <dd>Company Phone</dd>
    </dl>
  <dl class="list-group-item d-flex bg-light">
    <dt class="mr-4">
      <a class="card-link mr-4" href="">Delete Company</a>
    </dt>
    <dt class="mr-4">
      <a class="card-link" href="">Edit Company</a>
    </dt>
  </dl>
  </ul>

  <!-- link to company -->
  <form class="col-sm-12" action="" method="post">
    <fieldset class="form-group">
    <legend>Link to company</legend>

    <div class="form-group">
      <label for="company_id">Select list:</label>
          <select class="form-control" name="company_id">
            <option value="none">none</option>
            <option value="Company Link">Company Link
            </option>
        </select>
    </div><!-- form-group -->

    <button class="btn btn-outline-info" type="submit" name="insert_company">Add to company</button>
    </fieldset><!-- fieldset -->
  </form>
</div><!-- #company_pane -->
