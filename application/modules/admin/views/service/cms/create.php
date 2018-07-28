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
                          <div class="col-md-12">
                                <div class="form-group">
                                    <h5>service
                                      <span class="required">*</span>
                                    </h5>
                                    <div class="controls">
                                        <select name="id_services" class="select2-language form-control" id="select2-language" required="" data-validation-required-message="This field is required" aria-invalid="false" >
                                            <option value="">select option</option>
                                            <?php foreach($services as $service) { ?>
                                              <option value="<?php echo ($service->id) ? $service->id : '';?>"><?php echo ($service->name) ? $service->name : '';?></option>
                                            <?php } ?>
                                        </select>
                                      <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <h5>Heading
                                    <span class="required">*</span>
                                  </h5>
                                  <div class="controls">
                                      <input type="text" name="heading" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false">
                                      <div class="help-block"></div>
                                  </div>
                                </div>               
                                <div class="form-group">
                                  <h5>Description</h5>
                                    <div class="controls">
                                      <textarea name="content" class="form-control" id="descTextarea" rows="3" placeholder=""></textarea>
                                    </div>
                                </div>
                               
                                
                                  <div id="image-preview" style="background-image: url('<?php echo base_url();?>assets/images/no-image.jpg');background-size: cover; background-position: center center;">
                                </div>
                                <div class="form-group">
                                  <h5>Image
                                  </h5>
                                    <div class="controls">
                                      <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="image-upload" >
                                        <label class="custom-file-label" id="image-label" for="inputGroupFile01">Choose file</label>
                                      </div>
                                  </div>
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