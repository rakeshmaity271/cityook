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

          <a href="<?php echo base_url('/admin/service/category/create');?>" class="btn btn-primary btn-min-width mr-1 mb-1" ><i class="fa fa-plus"></i> Add Category</a>

          <h3 class="content-header-title mb-0">Category List</h3>

          <?php if(!empty($this->session->flashdata('message'))) {?>

                      <?php echo $this->session->flashdata('message');?>

                  <?php } ?> 

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

                  <h4 class="card-title">Category List</h4>

                 

                </div>

                <div class="card-content collapse show">

                  <div class="card-body card-dashboard">

                    <table class="table table-striped table-bordered file-export">

                      <thead>

                        <tr>

                          <th><input type="checkbox" id="checkAll" ></th>

                          <th>SL</th>

                          <th>Image</th>

                          <th>Name</th>

                          <!-- <th>Status</th> -->

                          <!-- <th>Created by</th> -->

                          <th>Last Modified At</th>

                          <th>Action</th>

                        </tr>

                      </thead>

                      <tbody>

                          <?php $i = 1; foreach($categories as $category) {?>

                        <tr>

                          <td><input type="checkbox" name="categoryIds[]" value="<?php echo ($category->id) ? $category->id : '';?>" class="checkItem" /></td>

                          <td><?php echo $i;?></td>

                          <td><img height="32" width="32" src="<?php echo base_url();?>uploads/<?php echo $category->image;?>" alt="Image"></td>

                          <td><?php echo ($category->name) ? $category->name : '';?></td>

                          <!-- <td><input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/></td> -->

                          <td><?php echo ($category->updated_at) ? $category->updated_at : '';?></td>

                          <!-- <td>2011/04/25</td> -->

                          <td>

                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">

                                <a href="<?php echo base_url();?>admin/service/category/edit/<?php echo $category->id;?>" class="btn btn-primary" title="Edit"><i class="ft-edit"></i> Edit</a>

                                <button data-id="<?php echo $category->id;?>" data-token="" id="deleteBtn" type="button" class="btn btn-danger deleteBtn" title="Trash"><i class="ft-trash"></i>Trash</button>

                            </div>

                                                    

                        </td>

                        </tr>

                          <?php $i++; } ?>

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

$(document).ready(function() {

    $('#checkAll').click(function () {    

            $(':checkbox.checkItem').prop('checked', this.checked);    

    });


 
 $('.deleteBtn').on('click', function (e) {
      var id = $(this).attr('data-id');
      if (!e.isDefaultPrevented()) {
      var url = "<?php echo base_url();?>admin/service/category/delete/"+ id;
            var settings = {

              "async": true,

              "crossDomain": true,

              "url": url,

              "data" : id,

              "method": "POST",

              "headers": {
              },
              beforeSend: function() {
                $.LoadingOverlay("show");
            }

        }



          $.ajax(settings).done(function (data) {

            console.log(data);

            if(data.error === false) {

            setTimeout(function() {
              $.LoadingOverlay("hide");
                  swal({

                  title: "success",

                  text: data.message,

                  icon: "success",
                  buttons: true,

                  })
                  .then((willDelete) => {
                      if (willDelete) {
                          window.location.href = '<?php echo base_url("/admin/service/categories");?>';
                      } else {
                          swal("Your imaginary file is safe!");
                      }
                  });
                
              }, 3000);

            }
          });

          return false;

      }

    });
  });

</script>

</body>

</html>