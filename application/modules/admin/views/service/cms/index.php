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


          <a href="<?php echo base_url('/admin/service/cms/create');?>" class="btn btn-primary btn-min-width mr-1 mb-1" ><i class="fa fa-plus"></i> Add service Cms</a>

          <h3 class="content-header-title mb-0">Service Cms List</h3>

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

                  <h4 class="card-title">Service Cms List</h4>

                 

                </div>

               <div class="card-content collapse show">
                            <div class="card-body card-dashboard">

                                <table class="table-striped table-bordered file-export">

                      <thead>

                        <tr>
                          <th><input type="checkbox" id="checkAll" ></th>
                          <th>SL</th>
                          <th>Service Name</th>
                          <th>Heading</th>
                          <th>Content</th>
                          <!-- <th>Middle Section Heading</th> -->
                          <th>Action</th>
                        </tr>

                      </thead>

                      <tbody>

                          <?php $i = 1; foreach($service_cms as $cms) {?>

                        <tr>

                          <td><input type="checkbox" name="serviceIds[]" value="<?php echo ($cms->id) ? $cms->id : '';?>" class="checkItem" /></td>

                          <td><?php echo $i;?></td>

                          <td><?php echo ($cms->service_name) ? $cms->service_name : '';?></td>
                          <td><?php echo ($cms->heading) ? $cms->heading : '';?></td>
                          <td><?php echo ($cms->content) ? $cms->content : '';?></td>
                          <!-- <td><?php echo ($cms->middle_section_heading) ? $cms->middle_section_heading : '';?></td> -->
                          <td>

                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">

                                <a href="<?php echo base_url();?>admin/service/cms/edit/<?php echo $cms->id;?>" class="btn btn-primary" title="Edit"><i class="ft-edit"></i> Edit</a>

                                <button data-id="<?php echo $cms->id;?>" data-token="" id="deleteBtn" type="button" class="btn btn-danger deleteBtn" title="Trash"><i class="ft-trash"></i>Trash</button>

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
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this service!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((willDelete) => {
          if (willDelete) {
                    $.ajax({
                    type:'POST',
                    dataType:'JSON',
                    url:"<?php echo base_url();?>admin/service/cms/delete/"+ id,
                    beforeSend: function() {
                          $.LoadingOverlay("show");
                    },
                    success:function(data) {
                      $.LoadingOverlay("hide");
                      if(data.error === false) {
                        setTimeout(function() {
                         swal("Poof! Your service has been deleted!", {
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
          swal("Your record has been canceled!");
        }
      });
    });
    
  });

</script>

</body>

</html>