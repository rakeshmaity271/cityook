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
                  <h4 class="card-title">Customer List</h4>
                 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered file-export">
                      <thead>
                        <tr>
                        <th><input type="checkbox" id="checkAll" ></th>						  <th>Sno.</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>mobile</th>
                          <th>Address</th>
                         
                        </tr>
                      </thead>
                      <tbody>						<?php $i = 1; foreach($users as $user) {?>
                        <tr>							
                           <td><input type="checkbox" name="userIds[]" value="<?php echo ($user->id) ? $user->id : '';?>" class="checkItem" /></td>							 <td><?php echo  $i; ?></td>
                          <td><?php echo ($user->fullname) ? $user->fullname : '';?></td>						  <td><?php echo ($user->email) ? $user->email : '';?></td>						  <td><?php echo ($user->mobile) ? $user->mobile : '';?></td>						   <td><?php echo ($user->address) ? $user->address : '';?></td>
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
<script>$(document).ready(function() {    $('#checkAll').click(function () {                $(':checkbox.checkItem').prop('checked', this.checked);        });    $('.deleteBtn').on('click', function (e) {        swal({            title: "Are you sure?",            text: "Once deleted, you will not be able to recover this imaginary file!",            icon: "warning",            buttons: true,            dangerMode: true,            })            .then((willDelete) => {            if (willDelete) {                e.preventDefault();        var id = $(this).attr('data-id');        //var token = $(this).data("token");        $.ajax(        {            url: "<?php echo base_url();?>admin/service/category/delete/"+id,            type: 'DELETE',            dataType: "JSON",            data: {                "id": id,                "_method": 'DELETE',            },            success: function (data)            {                console.log(data);                if(data.error === false) {                    swal(data.message, {                        icon: "success",                    });                    window.location.reload();                }                console.log(data.message);                            }        });            } else {               // window.location.reload();            }      });            });});</script>
</body>
</html>