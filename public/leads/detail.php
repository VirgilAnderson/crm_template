<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = "Lead Details"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo url_for('leads/index.php'); ?>"><i class="fas fa-dollar-sign"></i> Leads</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-info-circle"></i> Lead Details</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <div class="row">

    <!-- Lead Card -->
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header">
          <h2><i class="fas fa-info-circle"></i> Lead Details</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <ul class="list-group list-group-flush">
              <dl class="list-group-item d-flex">
                <dt class="mr-4">Name</dt>
                <dd>First Name Last Name</dd>
              </dl>
              <dl class="list-group-item d-flex">
                <dt class="mr-4">Phone</dt>
                <dd>Phone</dd>
              </dl>
              <dl class="list-group-item d-flex">
                <dt class="mr-4">Email</dt>
                <dd>Email</dd>
              </dl>
              <dl class="list-group-item d-flex">
                <dt class="mr-4">Role</dt>
                <dd>Role</dd>
              </dl>
              <dl class="list-group-item d-flex">
                <dt class="mr-4">Lead source</dt>
                <dd>Lead Source</dd>
              </dl>
              <dl class="list-group-item d-flex">
                <dt class="mr-4">Date Created</dt>
                <dd>Lead Birthdate</dd>
              </dl>
              <dl class="list-group-item d-flex">
                <dt class="mr-4">Lead Owner</dt>
                <dd>Lead Owner</dd>
              </dl>
            </ul>
          </div><!-- .col-sm-5  -->

            <div class="col-sm-7">
              <div class="card bg-light">
                <div class="card-header">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#company_pane"><i class="far fa-building"></i> Company</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#project_pane"><i class="fas fa-project-diagram"></i> Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#task_pane"><i class="fas fa-thumbtack"></i> Tasks</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#history_pane"><i class="fas fa-history"></i> History</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#note_pane"><i class="far fa-sticky-note"></i> Notes</a>
                  </li>
                </ul><!-- .nav nav-tabs -->

                </div><!-- .card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div id="company_pane" class="container tab-pane active"><br>
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

                    <div id="task_pane" class="container tab-pane fade"><br>
                      <div class="table-responsive">
                        <table class="table table-hover table-sm">
                          <thead>
                            <tr>
                              <th>Title</th>
                              <th>Task Type</th>
                              <th>Task State</th>
                              <th>Due Date</th>
                              <th></th>
                              <th></th>

                            </tr>
                          </thead>
                          <tbody>
                            <tr class='clickable-row' data-href="">
                              <td><a href="">Task Name</a></td>
                              <td>task_type</td>
                              <td>task_state</td>
                              <td>due_date</td>
                              <td><a class="card-link mr-4" href="">Delete</a></td>
                              <td><a class="card-link" href="">Edit</a></td>
                            </tr>
                        </tbody>
                        </table>

                      </div><!-- .table-responsive -->

                      <dl class="list-group-item d-flex bg-light">
                        <dt class="mr-4">
                          <a class="card-link" href="">Add Task</a>
                        </dt>
                      </dl>
                    </div><!-- #tasks -->

                   <div id="history_pane" class="container tab-pane"><br>
                     <div class="table-responsive">
                       <table class="table table-striped table-sm">
                         <thead>
                           <tr>
                             <th>Time</th>
                             <th>Action</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <td>time</td>
                             <td>action</td>
                           </tr>
                       </tbody>
                       </table>

                     </div><!-- .table-responsive -->

                   </div><!-- #history -->

                   <div id="note_pane" class="container tab-pane fade"><br>
                      <div class="table-responsive">
                        <table class="table table-hover table-sm">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Note</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class='clickable-row' data-href="">
                              <td>id</td>
                              <td>note</td>
                              <td><a class="card-link mr-4" href="">Delete</a></td>
                              <td><a class="card-link" href="">Edit</a></td>
                            </tr>
                        </tbody>
                        </table>
                      </div><!-- .table-responsive -->
                      <dt class="mr-4">
                        <a class="card-link" href="">Add Note</a>
                      </dt>
                    </dl>
                   </div><!-- #notes -->
                 </div><!-- .tab-content -->
                </div><!-- .card-body -->
              </div><!-- .card -->
            </div><!-- .col-7 -->
          </div><!-- .row -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <dl class="list-group-item d-flex">
            <dt class="mr-4">
              <a class="card-link mr-4" href="">Delete Employee</a>
            </dt>
            <dt>
              <a class="card-link" href="">Edit Employee</a>
            </dt>
          </dl>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
