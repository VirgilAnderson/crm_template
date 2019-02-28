<?php require_once('../private/initialize.php'); ?>
<?php include('../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
  <div class="row">

    <!-- Tasks -->
    <div class="container col-sm-6 mb-4">
      <div class="card">
        <div class="card-header">
          <a href="" class="text-info"><h2><i class="fas fa-thumbtack"></i> Tasks</h2></a>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-sm">
              <thead>
                <tr class='clickable-row' data-href="">
                  <th></th>
                  <th>Title</th>
                  <th>Due Date</th>
                  <th>Status</th>
                  <th>Task Type</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><span class="badge badge-warning">Due Today</span></td>
                  <td>task Name</td>
                  <td>Date</td>
                  <td>task state</td>
                  <td>task type</td>
                </tr>
              </tbody>
            </table>
            <ul class="pagination pagination-sm justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#">Previous</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul><!-- .pagination -->
          </div><!-- .table-responsive -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> new task</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-6 -->
    <div class="container col-sm-6 mb-4">


      <!-- Leads -->
      <div class="card">
        <div class="card-header">
          <a href="<?php echo url_for('leads/index.php'); ?>" class="text-info"><h2><i class="fas fa-dollar-sign"></i> Leads</h2></a>
        </div><!-- .card-header -->

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-sm">
              <thead>
                <tr>
                  <th></th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Lead Source</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><span class='badge badge-info'>new</span></td>
                  <td>First Name</td>
                  <td>Last Name</td>
                  <td>Lead Source</td>
                </tr>
              </tbody>
            </table>
            <ul class="pagination pagination-sm justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#">Previous</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul><!-- .pagination -->
          </div><!-- .table-responsive -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('leads/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> new lead</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-6 -->
  </div><!-- . row -->


  <!-- Projects -->
  <div class="row">
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header">
          <h2><a href='' class="text-info"><i class="fas fa-project-diagram"></i> Projects</a></h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-sm">
              <thead>
                <tr>
                  <th>Project Title</th>
                  <th>Project State</th>
                  <th>Company Name</th>
                  <th>Project Owner</th>
                </tr>
              </thead>
              <tbody>
                <tr class='clickable-row' data-href="">
                  <td>Project Title</td>
                  <td>Project State</td>
                  <td>Company Name</td>
                  <td>Username</td>
                </tr>
            </tbody>
            </table>
            <ul class="pagination pagination-sm justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#">Previous</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul><!-- .pagination -->
          </div><!-- .table-responsive -->
        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('projects/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> new project</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->

<?php include('../private/shared/footer.php'); ?>
