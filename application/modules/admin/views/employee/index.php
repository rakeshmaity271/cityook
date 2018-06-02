<?php echo $head;?>


<!-- body content -->
<body class="vertical-layout vertical-menu 2-columns fixed-navbar pace-done menu-expanded"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
<?php echo $header;?>
<?php echo $sidebar;?>
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <!-- <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">DataTables</a>
                </li>
                <li class="breadcrumb-item active">Advanced DataTable
                </li>
              </ol>
            </div>
          </div> -->
          <h3 class="content-header-title mb-0"><?php echo $title;?></h3>
        </div>
       
      </div>
      <div class="content-body">
        <!-- DOM - jQuery events table -->
        
        <!-- Row created callback -->
        <!-- File export table -->
        <section id="file-export">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Employee List</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered file-export">
                      <thead>
                        <tr>
                        <th><input type="checkbox" id="checkAll" ></th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>mobile</th>
                          <th>Address</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                           <td><input type="checkbox" name="userIds[]" value="<?php echo ($emp->id) ? $emp->id : '';?>" class="checkItem" /></td>
                          <td><?php echo ($emp->fullname) ? $emp->fullname : '';?></td>
                        </tr>
                       
                        <?php $i++; } ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- File export table -->
      </div>
    </div>
  </div>
  <?php echo $script;?>

<?php echo $footer;?>
<script>
</body>
</html>