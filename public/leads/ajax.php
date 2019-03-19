<?php require_once('../../private/initialize.php'); ?>
<?php
  // Ensure User Logged In
  require_login();




?>

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
        <div class="card-header text-secondary">
          <div class='row'>
            <div class='col-sm'>
              <h2><i class="fas fa-dollar-sign"></i> Leads</h2>
            </div><!-- .col -->
          </div><!-- .row -->
        </div><!-- .card-header -->
        <div class="card-body">
          <div class='col-sm mb-3'>
            <!-- Search Form -->
            <form class="form-inline my-2 my-sm-0 d-flex justify-content-end">
              <input class="form-control mr-sm-2" type="text" placeholder="Search Leads...">
              <button class="btn btn-outline-dark my-2 my-sm-0" type="button"><i class="fas fa-search"></i></button>
            </form>
          </div><!-- .col-sm -->
          <div id='display_table'></div>

        </div><!-- .card-body -->
        <div class="card-footer">
          <a href="<?php echo url_for('leads/new.php'); ?>" class="btn btn-outline-info mb-2" role="button"><i class="far fa-plus-square"></i> new lead</a>
        </div><!-- .card-footer -->
      </div><!-- .card -->
    </div><!-- .container col-sm-12 -->
  </div><!-- . row -->
</div><!-- .container -->
<?php include('../../private/shared/footer.php'); ?>

<script>
  var container = document.getElementById('display_table');

  function appendToDiv(div, new_html) {
    // Put the new HTML into a temp div
    // This causes browser to parse it as elements.
    var temp = document.createElement('div');
    temp.innerHTML = new_html;

    // Then we can find and work with those elements.
    // Use firstElementChild b/c of how DOM treats whitespace.
    var class_name = temp.firstElementChild.className;
    var items = temp.getElementsByClassName(class_name);

    var len = items.length;
    for(i=0; i < len; i++) {
      div.appendChild(items[0]);
    }
  }

  function loadMore(page, uid) {
    var page = page;
    var uid = uid;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'ajax/pagination.php?page=' + page + '&uid=' + uid, true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function () {
      if(xhr.readyState == 4 && xhr.status == 200) {
        var result = xhr.responseText;
        console.log('Result: ' + result);

        // Delete Previous result
        container.innerHTML = '';
        // append results to end of blog posts
        appendToDiv(container, result);

      }
    };
    xhr.send();
  }

  // Load even the first page with Ajax
  loadMore(2, 2);



</script>
