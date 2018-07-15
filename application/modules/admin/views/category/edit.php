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

                  <h4 class="card-title" id="horz-layout-colored-controls"><?php echo ($formHeading) ? $formHeading : ''?></h4>

                  

                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

                  <div class="heading-elements">

                    

                  </div>

                </div>

                <div class="card-content collpase show">

                  <div class="card-body">

                    

                  <form class="form-horizontal" enctype="multipart/form-data" novalidate method="POST" action="<?php echo base_url();?>/admin/service/category/update/<?php echo $category->id;?>">

                      <div class="form-body">

                        <h4 class="form-section"><?php echo ($categoryInformation) ? $categoryInformation : ''?></h4>

                        

                        <div class="row">

                          <div class="col-md-6">

                          <div class="form-group">

                            <h5>Name

                              <span class="required">*</span>

                            </h5>

                            <div class="controls">

                              <input type="text" name="name" value="<?php echo $category->name;?>" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false">

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

                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="file">

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

                                  <option value="0" <?php echo ($category->status === '0') ? 'selected' : '';?>>Inactive</option>

                                  <option value="1" <?php echo ($category->status === '1') ? 'selected' : '';?>>Active</option>

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

                            <textarea name="description" class="form-control" id="descTextarea" rows="3" placeholder="Description"><?php echo $category->description;?></textarea>

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