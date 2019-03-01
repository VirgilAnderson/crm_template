<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = "Leads"; ?>
<?php include('../../private/shared/header.php'); ?>

<!-- breadcrumbs -->
<div class="container" style="margin-top:20px">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="breadcrumb-item active"><i class="fas fa-dollar-sign"></i> Leads</li>
  </ol>
</div><!-- .container mt-4 -->

<!-- main container -->
<div class='container'>
    <div class="container col-12 mb-4">
      <div class="card">
        <div class="card-header">
          <h2><i class="fas fa-dollar-sign"></i> Leads</h2>
        </div><!-- .card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-sm">
              <thead>
                <tr>
                  <th></th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Role</th>
                  <th>Lead Source</th>
                </tr>
              </thead>
              <tbody>

                <tr class='clickable-row' data-href="">
                  <td><span class='badge badge-info'>new</span></td>
                  <td>first_name</td>
                  <td>last_name</td>
                  <td>role</td>
                  <td>source</td>
                </tr>
            </tbody>
            </table>
          </div><!-- .table-responsive -->

          <!-- pagination -->
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
        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('leads/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> new lead</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>
