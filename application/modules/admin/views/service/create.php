<?php echo $head;?>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<?php echo $header;?>

<?php echo $sidebar;?>



<div class="app-content content">

    <div class="content-wrapper">

      <div class="content-header row">

        <div class="content-header-left col-md-6 col-12 mb-2">

         

          <h3 class="content-header-title mb-0"><?php echo ($title) ? $title : ''?></h3>

          

        </div>

                  <?php if(!empty($this->session->flashdata('message'))) {?>

                      <?php echo $this->session->flashdata('message');?>

                  <?php } ?> 

      </div>

      <div class="content-body">

        <!-- Basic form layout section start -->

        <section id="horizontal-form-layouts">

          <div class="row">

            <div class="col-md-12">

              <div class="card">

                <div class="card-header">

                  <h4 class="card-title" id="horz-layout-colored-controls"><?php echo ($form) ? $form : ''?></h4>

                  

                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

                  <div class="heading-elements">

                    

                  </div>

                </div>

                <div class="card-content collpase show">

                  <div class="card-body">

                    
                  <?php if(isset($id) || !empty($id)) { ?>
                    <form class="form-horizontal" enctype="multipart/form-data" novalidate method="POST" action="<?php echo ($action) ? $action : ''?>">
                  <?php } else { ?>
                    <form class="form-horizontal" enctype="multipart/form-data" novalidate method="POST" action="<?php echo ($action) ? $action : ''?>">
                  <?php } ?>

                      <div class="form-body">


                        <div class="row">

                          <div class="col-md-6">

                          <div class="form-group">

                            <h5>Name

                              <span class="required">*</span>

                            </h5>

                            <div class="controls">

                              <input type="text" name="name" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false">

                            <div class="help-block"></div></div>

                           

                          </div>

                          </div>

                          <div class="col-md-6">

                          <div class="form-group">

                            <h5>Image

                              <!-- <span class="required">*</span> -->

                            </h5>

                            <div class="controls">

                              <!-- <input type="file" name="image" class="custom-file-input" required="" data-validation-required-message="This field is required" aria-invalid="false"> -->

                              <div class="custom-file">

                                <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" >

                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

                              </div>

                            <!-- <div class="help-block"></div> -->

                          </div>

                          

                          </div>

                          </div>

                          <div class="col-md-6">

                          <div class="form-group">

                            <h5>Status

                              <span class="required">*</span>

                            </h5>

                            <div class="controls">

                              <!-- <input type="text" name="text" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> -->

                              <select name="status" class="select2-language form-control" id="select2-language" data-validation-required-message="This field is required" >

                                  <option value="">select option</option>

                                  <option value="0">Inactive</option>

                                  <option value="1">Active</option>

                              </select>

                            <div class="help-block"></div></div>

                            

                          </div>

                          </div>

                          <div class="col-md-6">

                            <div class="form-group">

                            <h5>Description

                              <!-- <span class="required">*</span> -->

                            </h5>

                            <div class="controls">

                            <textarea name="description" class="form-control" id="descTextarea" rows="3" placeholder="Description"></textarea>

                            <div class="help-block"></div></div>

                            

                          </div>

                          

                          </div>

                        </div>

                        

                      

                      </div>

                      <div class="form-actions right">

                      <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>

                      

                      </div>

                    </form>

                  </div>

                </div>

              </div>

            </div>

          </div>

          

        </section>

        <!-- // Basic form layout section end -->

      </div>

    </div>

</div>

<?php echo $script;?>

<?php echo $footer;?>



</body>

</html>