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
                                    <h5>Category
                                      <span class="required">*</span>
                                    </h5>
                                    <div class="controls">
                                        <select name="id_categories" class="select2-language form-control" id="select2-language" required="" data-validation-required-message="This field is required" aria-invalid="false" >
                                            <option value="">select option</option>
                                            <?php foreach($categories as $category) { ?>
                                              <option value="<?php echo ($category->id) ? $category->id : '';?>"><?php echo ($category->name) ? $category->name : '';?></option>
                                            <?php } ?>
                                        </select>
                                      <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <h5>Name
                                    <span class="required">*</span>
                                  </h5>
                                  <div class="controls">
                                  <input type="text" name="name" value="<?php echo ($service->name) ? $service->name : ''; ?>" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false">
                                  <input type="hidden" value="<?php echo ($service->id) ? $service->id : ''; ?>" name="id">
                                      <div class="help-block"></div>
                                  </div>
                                </div>               
                                <div class="form-group">
                                  <h5>Description</h5>
                                    <div class="controls">
                                      <textarea name="description" class="form-control" id="descTextarea" rows="3" placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Service Type
                                      <span class="required">*</span>
                                    </h5>
                                    <div class="controls">
                                        <select name="status" class="select2-language form-control" id="select2-language" data-validation-required-message="This field is required" >
                                            <option value="">select option</option>
                                            <option value="deep">Basic</option>
                                            <option value="basic">Deep</option>
                                        </select>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <h5>Service Time
                                  </h5>
                                  <div class="controls">
                                      <input type="text" name="service_time" class="form-control">
                                    <div class="help-block"></div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <h5>Number of BHK
                                  </h5>
                                  <div class="controls">
                                    <input type="number" name="number_of_bhk" class="form-control">
                                  <div class="help-block"></div>
                                </div>
                                </div>
                                <div class="form-group">
                                  <h5>Number of Service Men
                                    
                                  </h5>
                                  <div class="controls">
                                    <input type="number" name="no_of_service_men" class="form-control">
                                  <div class="help-block"></div>
                                </div>
                                </div>
                                <div class="form-group">
                                  <h5>Note</h5>
                                    <div class="controls">
                                      <textarea name="note" class="form-control" id="note" rows="3" placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Frequency
                                    </h5>
                                  <div class="controls">
                                      <select name="frequency" class="select2-language form-control" id="select2-language" >
                                          <option value="">select option</option>
                                          <option value="1">One Time</option>
                                          <option value="2">Halferly</option>
                                          <option value="3">Quartly</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <h5>Price
                                    <span class="required">*</span>
                                  </h5>
                                  <div class="controls">
                                    <input type="text" name="price" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false">
                                  <div class="help-block"></div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <h5>Package
                                    </h5>
                                  <div class="controls">
                                      <select name="package" class="select2-language form-control" id="select2-language" >
                                          <option value="">select option</option>
                                          <option value="Bronze">Bronze</option>
                                          <option value="Sliver">Sliver</option>
                                          <option value="Gold">Gold</option>
                                          <option value="Platinum">Platinum</option>
                                      </select>
                                      <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <h5>Video URL
                                  </h5>
                                  <div class="controls">
                                    <input type="text" name="video_url" class="form-control" >
                                  <div class="help-block"></div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <h5>Status
                                      <span class="required">*</span>
                                    </h5>
                                  <div class="controls">
                                      <select name="status" class="select2-language form-control" id="select2-language" data-validation-required-message="This field is required" >
                                          <option value="">select option</option>
                                          <option value="0" <?php echo ($service->status === '0') ? 'selected' : '';?>>Inactive</option>
                                          <option value="1" <?php echo ($service->status === '1') ? 'selected' : '';?>>Active</option>
                                      </select>
                                      <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="text-bold-600 font-medium-2">
                                    Related Service
                                  </div>
                                  <div class="controls">
                                  <select class="select2 form-control" name="related_service[]" multiple="multiple">
                                    
                                    <?php foreach ($related_services as $related_service) { ?>
                                      <option value="<?php echo ($related_service->id) ? $related_service->id : '';?>"><?php echo ($related_service->name) ? $related_service->name : '';?></option>
                                    <?php } ?>
                                    
                                  </select>
                                  </div>
                                </div>
                                <div id="image-preview">
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