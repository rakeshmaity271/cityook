<?php echo $head;?>
<!-- body content -->

<body class="vertical-layout vertical-menu 2-columns fixed-navbar pace-done menu-expanded" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<?php echo $header;?>

<?php echo $sidebar;?>

<div class="app-content content">

    <div class="content-wrapper">

      <div class="content-header row">

        <div class="content-header-left col-md-6 col-12 mb-2">


         

          <h3 class="content-header-title mb-0">Order List</h3>

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

                  <h4 class="card-title">Order List</h4>

                 

                </div>

               <div class="card-content collapse show">
                            <div class="card-body card-dashboard">

                                <table class="table-striped table-bordered file-export">

                      <thead>

                        <tr>
                          <th>Transaction ID</th>
                          <th>Order ID</th>
                          <th>Full Name</th>
                          <th>Product Code</th>
                          <th>Order Datetime</th>
                         <!--  <th>Action</th> -->
                        </tr>

                      </thead>

                      <tbody>

                          <?php $i = 1; foreach($orders as $or) {?>

                        <tr>

                         

                          <td><a href="<?php echo ($or['txnid']) ? base_url().'admin/order/'.$or['txnid'] : ''?>"><?php echo ($or['txnid']) ? $or['txnid'] : ''?></a></td>
                          <td><?php echo ($or['orderId']) ? $or['orderId'] : ''?></td>
                         
                          <td><?php echo ($or['customerName']) ? $or['customerName'] : ''?></td>
                          <td><?php echo ($or['productCode']) ? $or['productCode'] : ''?></td>
                          <td><?php echo ($or['orderDateTime']) ? $or['orderDateTime'] : ''?></td>

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


</body>

</html>