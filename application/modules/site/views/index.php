<?php echo $head;?>

<?php echo $header;?>

<body>

<div class="">

		<!-- Slider Section -->

		<div class="container-fluid bannerMain">



			<div class="col-md-12 col-sm-12 col-xs-12">

				<div id="owl-banner" class="owl-carousel owl-theme">

					 <div class="item">

						<a href="#" class="imgBanners" data-bannerName="ac10"><img src="assets/cityook/images/502.png" alt="Timesaverz ac10"/></a>

					 </div>

					 <div class="item">

						<a href="#" class="imgBanners" data-bannerName="pegdolls homeandsofa cleaning"><img src="assets/cityook/images/502.png" alt="Timesaverz pegdolls homeandsofa cleaning"/></a>

					 </div>

					 <div class="item">

						<a href="#" class="imgBanners" data-bannerName="pestcontrolpegdolls"><img src="assets/cityook/images/502.png" alt="Timesaverz pestcontrolpegdolls"/></a>

					 </div>

					 <div class="item">

						<a href="#" class="imgBanners" data-bannerName="pegdollscarspa"><img src="assets/cityook/images/502.png" alt="Timesaverz pegdollscarspa"/></a>

					 </div>

					 <div class="item">

						 <a href="#" class="imgBanners" data-bannerName="pegdollrepair"><img src="assets/cityook/images/502.png" alt="Timesaverz pegdollrepair"/></a>

					 </div>

					 <div class="item">

						 <a href="#" class="imgBanners" data-bannerName="pegdollhandyman"><img src="assets/cityook/images/502.png" alt="Timesaverz pegdollhandyman"/></a>

					 </div>				

				</div>

			</div>



			<!-- menu end -->

		</div>

		<!-- BANNER SECTION ENDS -->

		<!--service section start -->

		<div class="container">
		 <div class="row destacados">
				<?php if(isset($categories)) { ?>
				<?php foreach ($categories as $category) { ?>
					<div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url().'en/';?><?php echo $category->slug;?>"><img src="<?php echo base_url();?>uploads/<?php echo $category->image;?>" alt="<?php echo $category->name;?>" class="img-circle img-thumbnail simg"></a>
								<p><a href="<?php echo base_url();?><?php echo $category->slug;?>" class="servicea" title="Enlace"><?php echo $category->name;?></a></p>
						</div>
					</div>
				<?php } ?>
				<?php } ?>
			</div>
		</div>

		<!-- service section end -->

		<!--<div class="menuMain col-md-12 col-sm-12 col-xs-12">

				<a href='#' class='buttonSupercategory' data-supercategoryName='Cleaning'>

									<i class='hovicon effect-1 sub-a'>

										<span class='menu__items' style='bottom: 2px; left: 2px;background-image:url(assets/cityook/images/6.png);' data-supercategoryid='1'></span>

									</i>

									<span>cleaning</span>

								  <span class='triangle'></span>

								  </a>

								  <a href='#' class='buttonSupercategory' data-supercategoryName='Repairs'>

									<i class='hovicon effect-1 sub-a'>

										<span class='menu__items' style='bottom: 2px; left: 2px;background-image:url(assets/cityook/images/21.png);' data-supercategoryid='2'></span>

									</i>

									<span>repairs</span>

								  <span class='triangle'></span>

								  </a>

								  <a href='#' class='buttonSupercategory' data-supercategoryName='Pest-Control'>

									<i class='hovicon effect-1 sub-a'>

										<span class='menu__items' style='bottom: 2px; left: 2px;background-image:url(assets/cityook/images/17.png);' data-supercategoryid='6'></span>

									</i>

									<span>pest-control</span>

								  <span class='triangle'></span>

								  </a>

								  <a href='#' class='buttonSupercategory' data-supercategoryName='Car-Spa'>

									<i class='hovicon effect-1 sub-a'>

										<span class='menu__items' style='bottom: 2px; left: 2px;background-image:url(//cdn-timesaverz.s3.amazonaws.com/documents/assets/icons/v5/3.png);' data-supercategoryid='16'></span>

									</i>

									<span>car-spa</span>

								  <span class='triangle'></span>

								  </a>

								  <a href='#' class='buttonSupercategory' data-supercategoryName='Painting'>

									<i class='hovicon effect-1 sub-a'>

										<span class='menu__items' style='bottom: 2px; left: 2px;background-image:url(//cdn-timesaverz.s3.amazonaws.com/documents/assets/icons/v5/69.png);' data-supercategoryid='14'></span>

									</i>

									<span>painting</span>

								  <span class='triangle'></span>

								  </a>

								  <a href='#' class='buttonSupercategory' data-supercategoryName='Handyman'>

									<i class='hovicon effect-1 sub-a'>

										<span class='menu__items' style='bottom: 2px; left: 2px;background-image:url(//cdn-timesaverz.s3.amazonaws.com/documents/assets/icons/v5/12.png);' data-supercategoryid='3'></span>

									</i>

									<span>handyman</span>

								  <span class='triangle'></span>

								  </a>

								  				<div class="clearfix"></div>

				

				<div class="menuItems" id="supercategoryPreview" style="display: none;">

					<ul style="margin-bottom: 5px;min-height: 55px;">

						<li class="categoryHeading">



						</li>

					</ul>

				</div>

				<div class='menuItems' id='supercategoryPreview1' style='display: none;'>

									<ul><li><a href='#'>Home</a></li><li><a href='delhi/cleaning/office'>Office</a></li><li><a href='#'>Sofa</a></li><li><a href='#'>Bathroom</a></li><li><a href='#'>Loft</a></li><li><a href='#'>Balcony</a></li><li><a href='#'>Carpet</a></li><li><a href='#'>Mattress</a></li><li><a href='#'>Chair</a></li><li><a href='#'>Window</a></li><li><a href='#'>Kitchen</a></li><li><a href='#'>Fridge</a></li></ul>



								 </div><div class='menuItems' id='supercategoryPreview2' style='display: none;'>

									<ul><li><a href='#'>AC</a></li><li><a href='#'>Water Purifier</a></li><li><a href='#'>Laptop</a></li><li><a href='#'>Chimney</a></li><li><a href='#'>Washing Machine</a></li><li><a href='#'>Microwave</a></li><li><a href='#'>Fridge</a></li></ul>



								 </div><div class='menuItems' id='supercategoryPreview6' style='display: none;'>

									<ul><li><a href='#'>General</a></li><li><a href='#'>Bed Bugs</a></li></ul>



								 </div><div class='menuItems' id='supercategoryPreview16' style='display: none;'>

									<ul><li><a href='#'>Exterior</a></li><li><a href='#'>Interior</a></li><li><a href='#'>Complete</a></li></ul>



								 </div><div class='menuItems' id='supercategoryPreview14' style='display: none;'>

									<ul><li><a href='#'>Fresh Paint</a></li><li><a href='#'>Repaint</a></li></ul>



								 </div><div class='menuItems' id='supercategoryPreview3' style='display: none;'>

									<ul><li><a href='#'>Electrician</a></li><li><a href='#'>Plumber</a></li><li><a href='#'>Carpenter</a></li></ul>



								 </div>				

				<div class="clearfix"></div>

			</div>-->

			<div class="clearfix"></div>



		<!--- About information Start Here -->

		<div class="container-fluid ">

		<div class="container">

		<div class="row aboutarea">

			<div class="col-lg-6">

			<h1 class="webabouth" style="">WELCOME TO INFO</h1>

			<p class="webaboutp" style="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

			</div>

			<div class="col-lg-6">

			<img src="assets/cityook/images/florida-plumber.jpg" class="img-responsive"/>

			</div>

		</div>

		</div>

		</div>

		<!-- End About Information-->

		<!-- start service area -->

		<section class="service-section sec-pad" style="0px 20px 0px 20px;">

		<div class="container">

			<div class="sec-title text-center">

				<h2>Service That We Offers</h2>

				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor </p>

			</div><!-- /.sec-title -->

			<div class="row" style="0px 20px 0px 20px;">

				<div class="col-md-4">

					<div class="single-service left-col">

						<div class="text-box">

							<h3>Cleaning</h3>

							<p>Lorem ipsum dolor sit amet constur adip elit sed do eiusmtempor incid dolore magna</p>

						</div><!-- /.text-box -->

						<div class="icon-box">

							<div class="inner-box">

								<i class="fa fa-cog"></i>

							</div><!-- /.inner-box -->

						</div><!-- /.icon-box -->

					</div><!-- /.single-service left-col -->

					<div class="single-service left-col">

						<div class="text-box">

							<h3>Painting</h3>

							<p>Lorem ipsum dolor sit amet constur adip elit sed do eiusmtempor incid dolore magna</p>

						</div><!-- /.text-box -->

						<div class="icon-box">

							<div class="inner-box">

								<i class="fa fa-cog"></i>

							</div><!-- /.inner-box -->

						</div><!-- /.icon-box -->

					</div><!-- /.single-service left-col -->

					<div class="single-service left-col">

						<div class="text-box">

							<h3>Car Spa</h3>

							<p>Lorem ipsum dolor sit amet constur adip elit sed do eiusmtempor incid dolore magna</p>

						</div><!-- /.text-box -->

						<div class="icon-box">

							<div class="inner-box">

								<i class="fa fa-cog"></i>

							</div><!-- /.inner-box -->

						</div><!-- /.icon-box -->

					</div><!-- /.single-service left-col -->

				</div><!-- /.col-md-4 -->

				<div class="col-md-4 text-center">

					<img src="assets/cityook/images/service-1.png" alt="Awesome Image" class="img-responsive">

				</div><!-- /.col-md-4 -->

				<div class="col-md-4">

					<div class="single-service right-col">

						<div class="icon-box">

							<div class="inner-box">

								<i class="fa fa-cog"></i>

							</div><!-- /.inner-box -->

						</div><!-- /.icon-box -->

						<div class="text-box">

							<h3>Bath Tub</h3>

							<p>Lorem ipsum dolor sit amet constur adip elit sed do eiusmtempor incid dolore magna</p>

						</div><!-- /.text-box -->

						

					</div><!-- /.single-service right-col -->

					<div class="single-service right-col">

						<div class="icon-box">

							<div class="inner-box">

								<i class="fa fa-cog"></i>

							</div><!-- /.inner-box -->

						</div><!-- /.icon-box -->

						<div class="text-box">

							<h3>Repairs</h3>

							<p>Lorem ipsum dolor sit amet constur adip elit sed do eiusmtempor incid dolore magna</p>

						</div><!-- /.text-box -->

						

					</div><!-- /.single-service right-col -->

					<div class="single-service right-col">

						<div class="icon-box">

							<div class="inner-box">

								<i class="fa fa-cog"></i>

							</div><!-- /.inner-box -->

						</div><!-- /.icon-box -->

						<div class="text-box">

							<h3>Painting</h3>

							<p>Lorem ipsum dolor sit amet constur adip elit sed do eiusmtempor incid dolore magna</p>

						</div><!-- /.text-box -->

						

					</div><!-- /.single-service right-col -->

				</div><!-- /.col-md-4 -->

			</div><!-- /.row -->

		</div><!-- /.container -->

	</section>

		<!-- end service area-->

		

			<!-- Services section -->

	<section id="what-we-do" >

		<div class="container" style="padding:0px 15px 0px 15px;">

			<h2 class="section-title mb-2 h1">What we do</h2>

			

			<div class="row mt-5">

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-1">

							<h3 class="card-title">Special title</h3>

							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>

						</div>

					</div>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-2">

							<h3 class="card-title">Special title</h3>

							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>

						</div>

					</div>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-3">

							<h3 class="card-title">Special title</h3>

							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>

						</div>

					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-4">

							<h3 class="card-title">Special title</h3>

							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>

						</div>

					</div>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-5">

							<h3 class="card-title">Special title</h3>

							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>

						</div>

					</div>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-6">

							<h3 class="card-title">Special title</h3>

							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>

						</div>

					</div>

				</div>

			</div>

		</div>	

	</section>

		<!-- Services section -->

		<!-- contact Section Start-->

		<div class="service-banner ">

        	<div class="container">

			<div class="row relative-position callarea">

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <img src="assets/cityook/images/footer-img.png" alt="Service Provider Image">

                </div>

                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 callarea ">

                    <h2 class="contt"><i class="fa fa-life-ring" aria-hidden="true"></i> Give Us A Call Anytime 365 Days a Year!</h2>

                    <p class="cont">We are really very happy to announce that we have some great services to offer in your area all around the year! As our mission is to provide best services in town that's why we are some awesome Plumbering guys.</p>

                	<div class="call-box "><i class="fa fa-phone"></i> 123-123-1234 &nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i> info@demo.com</div>

                </div><!-- Columns /-->

            	

            </div><!-- Row /-->

			</div>

        </div>

		

       <!-- contact section end -->		

		<!-- APP DOWNLOAD SECTION -->

		<!--<div class="container-fluid downloadApp section">

			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">

				<div class="row" style="position: relative;">

					<div class="col-md-6 col-md-pull-1 col-sm-6 col-sm-push-1 col-xs-12 download__Image" style="position: relative;top: 0;">

						<img src="images/download-app-image.png" alt="Download Timesaverz App" />

					</div>

					<div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12" >

						<h2 class="heading row container-fluid">Download the app</h2>

						<h3 class="row container-fluid sub-heading">it's smart, easy and fast!</h3>

						<div class="download__Icons container-fluid row">

							<div class="col-md-5 col-sm-5 col-xs-5 col-xs-offset-1"><a href="#" target="_blank"><img src="images/app-store.png" alt="Timesaverz Appstore"/></a></div>

							<div class="col-md-5 col-sm-5 col-xs-5"><a href="#" target="_blank"><img src="images/google-play.png" alt="Timesaver Google Playstore" /></a></div>

						</div>

					</div>



					

				</div>

			</div>

		</div>-->

		<!-- APP DOWNLOAD SECTION ENDS -->



		





		

		<div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

		<div class="testimonial4_header">

			<h4>what our clients are saying</h4>

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

					<p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>

					<h4>Sunil Kumar</h4>

				</div>

			</div>

			<div class="item">

				<div class="testimonial4_slide">

					<img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />

					<p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>

					<h4>Ram Kumar Singh</h4>

				</div>

			</div>

			<div class="item">

				<div class="testimonial4_slide">

					<img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />

					<p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>

					<h4>Ravi Ojha</h4>

				</div>

			</div>

		</div>

		<a class="left carousel-control" href="#testimonial4" role="button" data-slide="prev">

			<span class="fa fa-chevron-left"></span>

		</a>

		<a class="right carousel-control" href="#testimonial4" role="button" data-slide="next">

			<span class="fa fa-chevron-right"></span>

		</a>

	</div>

	

		<!-- TESTIMONIALS ENDS -->

		<!-- Location area Start here -->

		<div class="container-fluid section areasServed">

			<div class="col-md-12 col-sm-12 col-xs-12 areas">

				<span class="areasServedHeading"><b>Areas Served:</b></span>

				<ul id="areasServed">

				<li><span>Gola Road</span> - <a href="#">800000</a> <span> | </span></li><li><span>Patna</span> - <a href="#">800012</a> <span> | </span></li><li><span>Danapur</span> - <a href="#">800000</a> <span> | </span></li><li><span>Gandhi Maidan</span> - <a href="#">801212</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800012</a> <span> | </span></li><li><span>Patna Junction</span> - <a href="#">800001</a> <span> | </span></li><li><span>Boring Road</span> - <a href="#">110021</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800012</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">801214</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">801112</a> <span> | </span></li><li><span>801101</span> - <a href="#">110070</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">801101</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">801112</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800101</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800010</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">Saguna More</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">Saguna More</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800101</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800101</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800102</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800102</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800102</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800102</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800102</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800102</a> <span> | </span></li><li><span>Saguna More</span> - <a href="#">800101</a> <span> | </span></li>

				</ul>

			</div>

		</div>

		<!-- Location End Here -->



		<!-- download app button -->

		<!--<div class="downloadAppButton  closeForm">

			<div class="downloadApp-trigger">

				<h4 class="rotated-text__inner">

				    <a target="_blank" href="/download-app">Download App</a>

			  	</h4>

		  	</div>

	  	</div>-->

<!--footer-->

</body>

<?php echo $footer;?>

<?php echo $script;?>