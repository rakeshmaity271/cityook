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


          <a href="<?php echo base_url('/admin/service/create');?>" class="btn btn-primary btn-min-width mr-1 mb-1" ><i class="fa fa-plus"></i> Add Service</a>

          <h3 class="content-header-title mb-0">Service List</h3>

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

                  <h4 class="card-title">Service List</h4>

                 

                </div>

               <div class="card-content collapse show">
                            <div class="card-body card-dashboard">

                                <table class="table-striped table-bordered file-export">

                      <thead>

                        <tr>
                          <th><input type="checkbox" id="checkAll" ></th>
                          <th>SL</th>
                          <th>Service Name</th>
                          <th>Service Type</th>
                          <th>Number of BHK</th>
                          <th>Number of Service Men</th>
                          <th>Frequency</th>
                          <th>Price</th>
                          <!-- <th>Package</th> -->
                          <!-- <th>Status</th> -->
                          <!-- <th>Created At</th> -->
                          <!-- <th>Last Modified At</th> -->
                          <th>Action</th>
                        </tr>

                      </thead>

                      <tbody>

                          <?php $i = 1; foreach($services as $service) {?>

                        <tr>

                          <td><input type="checkbox" name="categoryIds[]" value="<?php echo ($service->id) ? $service->id : '';?>" class="checkItem" /></td>

                          <td><?php echo $i;?></td>

                          <td><?php echo ($service->name) ? $service->name : '';?></td>
                          <td><?php echo ($service->service_type) ? $service->service_type : '';?></td>
                          <td><?php echo ($service->no_of_bhk) ? $service->no_of_bhk : '';?></td>
                          <td><?php echo ($service->no_of_service_men) ? $service->no_of_service_men : '';?></td>
                          <td><?php echo ($service->frequency) ? $service->frequency : '';?></td>
                          <td><?php echo ($service->price) ? $service->price : '0.00';?></td>
                          <!-- <td><?php echo ($service->package) ? $service->package : '';?></td> -->

                          <!-- <td><input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/></td> -->
                          <!-- <td><?php echo ($service->created_at) ? $service->created_at : '';?></td> -->

                          <!-- <td><?php echo ($service->updated_at) ? $service->updated_at : '';?></td> -->

                          <td>

                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">

                                <a href="<?php echo base_url();?>admin/service/edit/<?php echo $service->id;?>" class="btn btn-primary" title="Edit"><i class="ft-edit"></i> Edit</a>

                                <button data-id="<?php echo $service->id;?>" data-token="" id="deleteBtn" type="button" class="btn btn-danger deleteBtn" title="Trash"><i class="ft-trash"></i>Trash</button>

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
      var url = "<?php echo base_url();?>admin/service/delete/"+ id;
            var settings = {

              "async": true,

              "crossDomain": true,

              "url": url,

              "data" : id,

              "method": "POST",

              "headers": {
              },
              beforeSend: function() {
                // Show full page LoadingOverlay
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
                          window.location.href = '<?php echo base_url("/admin/services");?>';
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