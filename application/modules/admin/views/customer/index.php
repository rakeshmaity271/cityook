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


          <!-- <a href="<?php echo base_url('/admin/customer/create');?>" class="btn btn-primary btn-min-width mr-1 mb-1" ><i class="fa fa-plus"></i> Add customer</a> -->

          <h3 class="content-header-title mb-0"><?php echo ($title) ? $title : ''?></h3>

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

                  <h4 class="card-title"><?php echo ($title) ? $title : ''?></h4>

                 

                </div>

               <div class="card-content collapse show">
                            <div class="card-body card-dashboard">

                                <table class="table-striped table-bordered file-export">

                      <thead>

                        <tr>
                          <th><input type="checkbox" id="checkAll" ></th>
                          <th>SL</th>
                          <th>Image</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Adhar Number</th>
                          <!-- <th>State</th> -->
                          <th>Address</th>
                          <th>Status</th>
                          <th>Created At</th>
                          <th>Last Modified At</th>
                          <th>Action</th>
                        </tr>

                      </thead>

                      <tbody>

                          <?php $i = 1; foreach($customers as $customer) {?>

                        <tr>

                          <td><input type="checkbox" name="customerIds[]" value="<?php echo ($customer['id']) ? $customer['id'] : '';?>" class="checkItem" /></td>

                          <td><?php echo $i;?></td>
                          <td><img height="32" width="32" src="<?php echo ($customer['profile_pic']) ? $customer['profile_pic'] : '';?>" alt="<?php echo ($customer['fullname']) ? $customer['fullname'] : '';?>"></td>
                          <td><?php echo ($customer['fullname']) ? $customer['fullname'] : '';?></td>
                          <td><?php echo ($customer['email']) ? $customer['email'] : '';?></td>
                          <td><?php echo ($customer['phone']) ? $customer['phone'] : '';?></td>
                          <td><?php echo ($customer['adhar_no']) ? $customer['adhar_no'] : '';?></td>
                          <!-- <td><?php echo ($customer['state']) ? $customer['state'] : '';?></td> -->
                          <td><?php echo ($customer['address']) ? $customer['address'] : '';?></td>
                          <td><input type="checkbox" id="switchery" data-id="<?php echo ($customer['id']) ? $customer['id'] : '';?>"  class="switchery" data-size="xs" <?php echo ($customer['status'] === '1') ? 'checked' : '';?>/></td>
                          <td><?php echo ($customer['created_at']) ? $customer['created_at'] : '';?></td>
                          <td><?php echo ($customer['updated_at']) ? $customer['updated_at'] : '';?></td>
                          <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <button data-id="<?php echo $customer['id'];?>" data-token="" id="deleteBtn" type="button" class="btn btn-danger deleteBtn" title="Trash"><i class="ft-trash"></i>Trash</button>
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

  $(".switchery").change(function() {
      var status = $(this).prop('checked');
      $.ajax({
          type:'POST',
          dataType:'JSON',
          url:'<?php echo base_url();?>admin/customer/customer/updateStatus',
          data:{
            'status': status,
            'id': $(this).attr("data-id")
          },
          beforeSend: function() {
                $.LoadingOverlay("show");
          },
          success:function(data) {
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
                         location.reload();
                      } else {
                          swal("Your customer update has been canceled!");
                      }
                  });
                
              }, 1000);
            }
          }
        });
  });


    $('#checkAll').click(function () {    

            $(':checkbox.checkItem').prop('checked', this.checked);    

    });
    $('.deleteBtn').on('click', function (e) {
      var id = $(this).attr('data-id');
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this customer!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((willDelete) => {
          if (willDelete) {
                    $.ajax({
                    type:'POST',
                    dataType:'JSON',
                    url:"<?php echo base_url();?>admin/customer/customer/delete/"+ id,
                    beforeSend: function() {
                          $.LoadingOverlay("show");
                    },
                    success:function(data) {
                      $.LoadingOverlay("hide");
                      if(data.error === false) {
                        setTimeout(function() {
                         swal("Poof! Your customer has been deleted!", {
                            icon: "success",
                          }).then((willDelete) => {
                            if (willDelete) {
                              location.reload();
                            }
                          });
                        
                        }, 500);
                      }
                    }
                  });
                    
        } else {
          swal("Your customer has been canceled!");
        }
      });
    });
});

</script>

</body>

</html>