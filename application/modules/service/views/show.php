<?php 
//print_r($service);
?>
<?php echo $head; ?>
<?php echo $header;?>
<div class="maincontentarea" style="padding:68px 0px 0px 0px">
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="<?php echo base_url();?>">Home</a><span>&nbsp;<i class="fa fa-angle-right  "></i></span></li>
            <li><strong><?php echo $this->uri->segment('2'); ?></strong><span>&nbsp;<i class="fa fa-angle-right  "></i></span></li>
			 <li><strong><?php echo $this->uri->segment('3'); ?></strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <style>
  .breadcrumbs {
    padding: 7px 0px 0px 0px;
    margin: auto;
    font-size: 12px;
    border-bottom: 1px #e5e5e5 solid;
	border-top: 1px #e5e5e5 solid;
}
.breadcrumbs ul li {
    list-style-type: none;
    display: inline;
}
  </style>


</div>
   <?php //print_r($service); ?>
   <section style=" color:#fff;padding:1px 1px;">
      <p>&nbsp;</p>
      <div class="container-fluid ">
         <div class="container">
            <div class="row aboutarea">
               <div class="col-lg-2">
                  <div class="btn-group" id="myDropdown">
                     <nav style="">
                        <a href="#">HOME   &nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        CLEANING 
                        <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                           <li><a href="#">CLEANING</a></li>
                           <li><a href="#">Painting</a></li>
                           <li><a href="#">Car-Spa</a></li>
                           <li><a href="#">Plumber</a></li>
                           <li><a href="#">Handyman</a></li>
                           <li><a href="#">Repairs</a></li>
                           <!--<li class="divider"></li>
                              <li><a href="#">Choice..</a></li>-->
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="btn-group" id="myDropdown">
                     <nav style="">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-chevron-right"></i>&nbsp; SOFA
                        <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                           <li><a href="#">SOFA</a></li>
                           <li><a href="#">ROOM</a></li>
                           <li><a href="#">Car-Spa</a></li>
                           <li><a href="#">Plumber</a></li>
                           <li><a href="#">Handyman</a></li>
                           <li><a href="#">Repairs</a></li>
                        </ul>
                     </nav>
                  </div>
                  <!--	<div class="btn-group" id="myDropdown">
                     <nav style=""> 
                     	<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                     		 <i class="fa fa-chevron-right"></i>&nbsp; SOFA
                     	<span class="caret"></span>
                         </a>
                       <ul class="dropdown-menu">
                     	<li><a href="#">SOFA</a></li>
                     	<li><a href="#">ROOM</a></li>
                     	<li><a href="#">Car-Spa</a></li>
                     	<li><a href="#">Plumber</a></li>
                     	<li><a href="#">Handyman</a></li>
                     	<li><a href="#">Repairs</a></li>
                     	
                       </ul>
                     </nav>
                      
                     </div>-->
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="container-fluid ">
      <div class="container">
         <div class="row ">
            <div class="col-lg-6">
               <img src="<?php echo (isset($service_cms['image'])) ? $service_cms['image'] : '' ?>" class="img-responsive" height="298" width="500"/>
            </div>
            <div class="col-lg-6 categoryconp">
               <h1 class="webabouth" style=""><?php echo (isset($service_cms['heading'])) ? $service_cms['heading'] : '' ?></h1>
               <?php echo (isset($service_cms['content'])) ? $service_cms['content'] : '' ?>
            </div>
         </div>
         <p>&nbsp;</p>
         <!-- service-->
         <div class="row">
            <fieldset class="col-md-12">
               <!--<legend align="center">Select the Services</legend>-->
               <div class="col-xs-12 col-sm-6 col-md-12">
                  <h3 class="text-center">Choose A Service</h3>
                  <!-- tab start here --->
                  <div class="col-lg-12 col-sm-12">
                     <!--<div class="card hovercard">
                        <div class="card-background">
                            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
                            
                        </div>
                        <div class="useravatar">
                            <img alt="" src="http://lorempixel.com/100/100/people/9/">
                        </div>
                        <div class="card-info"> <span class="card-title">Pamela Anderson</span>
                        
                        </div>
                        </div>-->
                     <!--<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><!--<span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                     <!-- <div class="hidden-xs">Shampooing</div>
                        </button>
                        </div>
                        <div class="btn-group" role="group">
                        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><!--<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>-->
                     <!-- <div class="hidden-xs">Leather Sofa Cleaning</div>
                        </button>
                        </div>
                        <!-- <div class="btn-group" role="group">
                        <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab">-->
                     <!--<span class="glyphicon glyphicon-user" aria-hidden="true"></span>-->
                     <!-- <div class="hidden-xs"> Repairs</div>
                        </button>
                        </div>-->
                     <!-- </div>-->
                     <div class="well">
                        <div class="tab-content">
                           <div class="tab-pane fade in active" id="tab1">
                              <!-- service description start here -->
                              <div class="row" style="padding:0px 20px;">
                                 <div class="col-lg-6">
                                    <h3 style="text-align:center;font-weight:bold;">WHAT WE'LL DO</h3>
                                    <!-- <h4 style="padding:10px 30px; font-weight:bold;">Service Includes:-</h4> -->
                                    <!-- <ul style="list-style-type:square">
                                       <li class="webaboutp">Stain Removal</li>
                                       <li class="webaboutp">Cleaning using a special leather cleaning cream</li>
                                       
                                       </ul> -->
                                    <?php echo ($service[0]->description) ? $service[0]->description : ''; ?>
                                 </div>
                                 <div class="col-lg-6" style="padding:38px 10px;">
                                    <p>&nbsp;</p>
                                    <p style="font-size:20px;"><strong>Service Time:</strong>  <?php echo ($service[0]->service_time) ? $service[0]->service_time : ''; ?></p>
                                    <p>&nbsp;</p>
                                    <p style="font-size:20px;"><strong>No. of Servicemen:</strong> <?php echo ($service[0]->no_of_service_men) ? $service[0]->no_of_service_men : ''; ?> (depending on no. of seats)</p>
                                    <div class="card1" id="card1" style="display: none;">
                                       <!-- <div class="input-append date">
                                          <input type="text" class="span2"><span class="add-on"><i class="icon-th"></i></span>
                                       </div> -->
                                       <div class="form-group">
                                          <input class="form-control" id="fullname" name="fullname" placeholder="Date " type="text" required="required" data-error="Fullname is required.">
                                          <div class="help-block with-errors"></div>
                                       </div>
                                       <div class="form-group">
                                          <!--  <input class="form-control" id="fullname" name="fullname" placeholder="Please enter your Full Name " type="text" required="required" data-error="Fullname is required.">-->
                                          <select class="form-control">
                                             <option>Slect Seats</option>
                                             <option>3 seats</option>
                                             <option>4 seats</option>
                                          </select>
                                          <div class="help-block with-errors"></div>
                                       </div>
                                       <div class="form-group">
                                          <!--   <input  class="form-control" id="email" name="email" placeholder="Please enter Email id" type="email" data-error="Email is required.">-->
                                          <select class="form-control">
                                             <option>Slect Frequency Type</option>
                                             <option>One Time</option>
                                             <option>Monthly</option>
                                          </select>
                                          <div class="help-block with-errors"></div>
                                       </div>
									   <p style="font-size:20px;"><strong>You pay:</strong> <i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;<?php echo ($service[0]->price) ? $service[0]->price : ''; ?></p>
                                       <div class="form-group">
                                          <form id="frmCart">
                                             <?php
                                                $in_session = "0";
                                                if ($this->session->userdata('cart_item')) {
                                                	$session_code_array = array_keys($this->session->userdata('cart_item'));
                                                	if (in_array($service[0]->code, $session_code_array)) {
                                                		$in_session = "1";
                                                	}
                                                }
                                                ?>
                                             <!-- <button type="submit" class="btn btn-primary btn-block" name="login"> Add to Cart  </button> -->
                                             <input type="button" id="add_<?php echo ($service[0]->code) ? $service[0]->code : '' ?>" value="Add to cart" class="btnAddAction cart-action" onClick = "cartAction('add','<?php echo ($service[0]->code) ? $service[0]->code : '' ?>')"  />
                                             <input type="hidden" id="qty_<?php echo ($service[0]->code) ? $service[0]->code : '' ?>" name="quantity" value="1" size="2">																																																																																																																																																																																																																																																																																															
                                             <!-- <input type="button" id="added_<?php echo ($service[0]->code) ? $service[0]->code : '' ?>" value="Add to cart" class="btnAdded" onClick = "cartAction('added','<?php echo ($service[0]->code) ? $service[0]->code : '' ?>')" <?php if ($in_session != "1") { ?>style="display:none" <?php } ?> /> -->
                                          </form>
                                       </div>
                                       <!-- form-group// -->     
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <h2 style="padding:10px 30px;">Note:-</h2>
                                    <!-- <ul style="list-style-type:disc">
                                       <li class="webaboutp">Any hard/major stains may not immediately be removed</li>
                                       <li class="webaboutp">A periodic cleaning will be required for the same</li>
                                       <li class="webaboutp">Cushion Cleaning would be charged additional</li>
                                       <li class="webaboutp">Customer to provide for electrical connection</li>
                                       <li class="webaboutp">Cost inclusive of GST</li>
                                       </ul> -->
                                    <?php echo ($service[0]->note) ? $service[0]->note : ''; ?>
                                    <p>&nbsp;</p>
                                 </div>
                              </div>
                              <!--- start form-->
                              <?php if (isset($relatedServices) && count($relatedServices) > 0) { ?>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <!-- start related services -->
                                    <h2 class="relatedtitle">Our Related Services</h2>
                                    <div id="owl-demo" class="owl-carousel owl-theme">
                                       <?php foreach ($relatedServices as $relatedService) { ?>
                                       <div class="col-md-3 item">
                                          <a href="<?php echo ($relatedService['url']) ? $relatedService['url'] : '' ?>">
                                             <img alt="<?php echo ($relatedService['service_name']) ? $relatedService['service_name'] : '' ?>" width="250px;" height="250px;" src="<?php echo ($relatedService['image']) ? $relatedService['image'] : '' ?>">
                                             <span class="frb-title"><?php echo ($relatedService['service_name']) ? $relatedService['service_name'] : '' ?></span>
                                       </div>
                                       <?php 
                                          } ?>
                                    </div>
                                    <div class="customNavigation">
                                    <a class="btn prev">Previous</a>
                                    <a class="btn next">Next</a>
                                    <!-- <a class="btn play">Autoplay</a>
                                       <a class="btn stop">Stop</a> -->
                                    </div>
                                 </div>
                              </div>
                              <?php 
                                 } ?>
                              <!-- End related services -->
                              <!-- start testimonial -->
                              <!--<div id="testimonial45" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                                 <div class="testimonial4_header">
                                 
                                 	<h4 style="color:#000;font-size:17px;">Our Related Services</h4>
                                 
                                 </div>
                                 
                                 <ol class="carousel-indicators">
                                 
                                 	<li data-target="#testimonial4" data-slide-to="0" class="active"></li>
                                 
                                 	<li data-target="#testimonial4" data-slide-to="1"></li>
                                 
                                 	<li data-target="#testimonial4" data-slide-to="2"></li>
                                 
                                 </ol>
                                 
                                 <div class="carousel-inner" role="listbox">
                                 
                                 	<div class="item active">
                                 
                                 		<div class="testimonial4_slide">
                                 
                                 			<img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />
                                 
                                 			<p style="color:#000;">Excellent services</p>
                                 
                                 			<h4 style="color:#000;">Sunil Kumar,Patna</h4>
                                 
                                 		</div>
                                 
                                 	</div>
                                 
                                 	<div class="item">
                                 
                                 		<div class="testimonial4_slide">
                                 
                                 			<img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />
                                 
                                 			<p style="color:#000;">Good Jobs</p>
                                 
                                 			<h4 style="color:#000;">Ram Kumar Singh,Gola Road</h4>
                                 
                                 		</div>
                                 
                                 	</div>
                                 
                                 	<div class="item">
                                 
                                 		<div class="testimonial4_slide">
                                 
                                 			<img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />
                                 
                                 			<p style="color:#000;">Nice Work.</p>
                                 
                                 			<h4 style="color:#000;">Ravi Ojha,Danapur</h4>
                                 
                                 		</div>
                                 
                                 	</div>
                                 
                                 </div>
                                 
                                 <a class="left carousel-control" href="#testimonial4" role="button" data-slide="prev">
                                 
                                 	<span class="fa fa-chevron-left"></span>
                                 
                                 </a>
                                 
                                 <a class="right carousel-control" href="#testimonial4" role="button" data-slide="next">
                                 
                                 	<span class="fa fa-chevron-right"></span>
                                 
                                 </a>
                                 
                                 </div>-->
                              <!--- end testimonial-->
                              <!-- col.// -->
                           </div>
                        </div>
                        <!-- end form-->
                        <!-- service description end here -->
                     </div>
                     <!-- <div class="tab-pane fade in" id="tab2">
                        <h3>Leather Sofa Cleaning Section here..................</h3>
                        </div>
                        <div class="tab-pane fade in" id="tab3">
                        <h3>This is Repairs</h3>
                        </div> -->
                  </div>
               </div>
         </div>
         </hr>
         <!-- tab end here --->
         <div class="frb-group">
         <!-- <div class="frb frb-default">
            <input type="radio" id="radio-button-0" name="radio-button" value="0">
            <label for="radio-button-0">
            	<span class="frb-title">Ac</span>
            
            	<p><span class="frb-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In semper quam nunc.</span></p>
            </label>
            </div>
            <div class="frb frb-primary">
            <input type="radio" id="radio-button-1" name="radio-button" value="1">
            <label for="radio-button-1">
            	<span class="frb-title">Laptop</span>
            		<p><span class="frb-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In semper quam nunc.</span>	</p>
            </label>
            </div>
            <div class="frb frb-success">
            <input type="radio" id="radio-button-2" name="radio-button" value="2">
            <label for="radio-button-2">
            	<span class="frb-title">Water Purifier</span>
            		<p><span class="frb-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In semper quam nunc.</span>	</p>
            </label>
            </div> -->
         <!-- <div class="frb frb-warning">
            <input type="radio" id="radio-button-4" name="radio-button" value="4">
            <label for="radio-button-4">
            	<span class="frb-title">Washing Machine</span>
            		<p><span class="frb-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In semper quam nunc.</span>	</p>
            </label>
            </div>
            <div class="frb frb-danger">
            <input type="radio" id="radio-button-5" name="radio-button" value="5">
            <label for="radio-button-5">
            	<span class="frb-title">Fridge</span>
            		<p><span class="frb-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In semper quam nunc.</span>	</p>
            </label>
            </div> -->
         </div>

      </div>
      <!--<div class="row serviceitem">
         <div class="col-lg-2">	<img src="<?php echo base_url(); ?>assets/cityook/images/services/28home.png" class="img-responsive" width="80" height="30"/></div>
          <div class="col-lg-10">
              <span>home</span>
              <p>A healthy home is a happy home. Our cleaning solutions are specifically designed so that every nook and corner of your home shines like new!</p>
         </div>
         </div>
         
         <div class="row serviceitem">
         <div class="col-lg-2">	<img src="<?php echo base_url(); ?>assets/cityook/images/services/28home.png" class="img-responsive" width="80" height="30"/></div>
          <div class="col-lg-10">
              <span>home</span>
              <p>A healthy home is a happy home. Our cleaning solutions are specifically designed so that every nook and corner of your home shines like new!</p>
         </div>
         </div>-->
      </fieldset>
   </div>
   <!-- service end -->
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   </div>
   </div>
   <!-- set up the modal to start hidden and fade in and out -->
   <div id="myModal" class="modal fade" style="display:none">
      <div class="modal-dialog">
         <div class="modal-content">
            <!-- dialog body -->
            <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               Hello world!
            </div>
            <!-- dialog buttons -->
            <div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>
         </div>
      </div>
   </div>

<?php echo $footer; ?>
<?php echo $script; ?>
<script>

    function setCookie(key, value) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
    }

    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }

    /**
     * POST CODE validation in service page
     */
    $(document).ready(function() {
        var base_url = '<?php echo base_url();?>';
        //console.log(base_url);
        /// e.preventDefault(); //cancel default action
        // $('#card1').hide();
        if(getCookie('postcode')) {
            $('#card1').show();
            return false;
        }

        swal("Enter postcode", {
            content: "input",
            closeOnClickOutside: false,
        }).then((input) => {
            if(!input) {
                swal('Enter Postcode', 'Error', 'error');
                location.reload(true);
                //if (!input) throw null;
            }
            if(isNaN(input)) {
                alert(input + ' Input type not a number');
                //return false;
                location.reload(true);
            } else {
                $.ajax({
                    type: "post",
                    url: base_url +  "/service/service/isValidPostCode",
                    data: {
                        'postcode': input
                    },
                    success: function(data) {
                        if(data.error === false) {
                            console.log(data.postcode);
                            setCookie("postcode", data.postcode);
                            $('#card1').show();
                            swal.close();
                        }
                    },
                    failure: function(data) {
                        if(data.error === true) {
                            console.log('not found');
                            swal("Error", "Not found", "error");
                        }
                    }
                })
                    .done(function(data) {
                        if(data.error === true) {
                            console.log('not found');
                            swal('You entered invalid postcode', 'Error', 'error');
                            location.reload(true);
                        }
                    })
                    .error(function(data) {

                    });
            }
        });

    });
</script>
<script src="https://use.fontawesome.com/b4564248e6.js"></script><!-- radio start -->



