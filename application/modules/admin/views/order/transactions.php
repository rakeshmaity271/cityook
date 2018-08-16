<?php echo $head;?>
<!-- body content -->

<body class="vertical-layout vertical-menu 2-columns fixed-navbar pace-done menu-expanded" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<?php echo $header;?>

<?php echo $sidebar;?>

<div class="app-content content">

    <div class="content-wrapper">

      <div class="content-header row">

        <div class="content-header-left col-md-6 col-12 mb-2">


         

          <h3 class="content-header-title mb-0">Transaction List</h3>

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

                  <h4 class="card-title">Transaction List</h4>

                 

                </div>

               <div class="card-content collapse show">
                            <div class="card-body card-dashboard">

                                <table class="table-striped table-bordered file-export">

                      <thead>

                        <tr>
                          <th>Transaction ID</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Transaction Date</th>
                          <th>Action</th>
                        </tr>

                      </thead>

                      <tbody>

                          <?php $i = 1; foreach($transactions as $transaction) {?>

                        <tr>

                         

                          <td><a href="<?php echo ($transaction->mihpayid) ? base_url().'admin/transaction/'.$transaction->mihpayid : ''?>"><?php echo ($transaction->mihpayid) ? $transaction->mihpayid : ''?></a></td>
                          <td><?php echo ($transaction->amount) ? $transaction->amount : ''?></td>
                          <!-- <td><?php echo ($transaction->amount) ? $transaction->mihpayid : ''?></td> -->
                          <td><?php echo ($transaction->status) ? $transaction->status : ''?></td>
                          <td><?php echo ($transaction->transaction_date) ? $transaction->transaction_date : ''?></td>

                          

                          <td>

                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <button data-id="<?php echo $transaction->mihpayid;?>" data-token="" id="deleteBtn" type="button" class="btn btn-danger deleteBtn" title="Trash"><i class="ft-trash"></i>View Transaction</button>
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
        text: "Once deleted, you will not be able to recover this transaction!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((willDelete) => {
          if (willDelete) {
                    $.ajax({
                    type:'POST',
                    dataType:'JSON',
                    url:"<?php echo base_url();?>admin/order/deleteTransaction/"+ id,
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
          swal("Your service has been canceled!");
        }
      });
    });
});

</script>

</body>

</html>