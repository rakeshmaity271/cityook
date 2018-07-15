<!doctype html>
 <html lang="en"> 
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<title>Dm</title>
		<link href="css/style.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'/>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"/>

		<!-- start demo -->
		<script type="text/javascript">
			(function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="".split(" ");
			for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"js/mixpanel-2-latest.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
			mixpanel.init("");
		</script>
		<!-- end Demo -->

		<!--  fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		<link href="css/material-icon.css" rel="stylesheet">
		<!-- fonts end -->

		<!-- bootstrap css -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<!-- bootstrap css ed -->

		<!--  Design css -->
		<link href="css/bootstrap-material-design.min-1.1.css" rel="stylesheet">
		<link href="css/ripples.min.css" rel="stylesheet">
		<!--  Design css end -->
	<!--<link rel="stylesheet" href="css/main-1.3.min.css">-->
		<link rel="stylesheet" type="text/css" href="css/style-1.10.min.css" />
		<!-- <link rel="stylesheet" type="text/css" href="css/hovicon.css" /> -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/jquery.dropdown.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="css/dialog.css" />
		<!-- individual effect -->
		<link rel="stylesheet" type="text/css" href="css/dialog-alex.css" />
		<script src="js/mixpanel-2-latest.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<link rel="stylesheet" type="text/css" href="css/popupCart-1.1.min.css" />
		<link rel="stylesheet" type="text/css" href="css/booking-wizard-1.6.min.css" />
		<link rel="stylesheet" type="text/css" href="css/snackbar.css" />
		<link rel="stylesheet" type="text/css" href="css/li-scroller.css" />
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link href="css/perfect-scrollbar.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/topCartReview.min.css">
		<style type="text/css">
			.bodyContent{
				padding-top: 70px;
			}

			.newPromoBadge
			{
				display: inline-block;
				min-width: 10px;
				padding: 3px 7px;
				line-height: 1;
				color: #FFF;
				white-space: nowrap;
				vertical-align: baseline;
				border-radius: 10px;
				background: red;
				bottom: 70px !important;
				left: 42px !important;
				z-index: 9;
				font-style: normal;
				font-weight: normal;
				font-size: 15px !important;
			}

			.bodyContent {
				padding-top: 65px;
			}
			.cityDescription h2{
				text-align: justify;
			}
			.areasServedHeading{
				position: absolute;
				top: 13px;
				left: 25px;
				font-size: 17px;
				font-family: 'FuturaBT';
			}
			.areasServed.section {
			     padding: 0;
			}

			#areasServed ul li{
				font-family: 'FuturaBT' !important;
			}

			.menuMain a span{
				display: inline-block;
				white-space: nowrap;
				margin-left: -5px;
			}
			/*download app button css*/
			.downloadAppButton{
				position: absolute;
				top: 200px;
				position: fixed;
				z-index: 1040;
				right: -138px;
				display: none;
			}
			.downloadApp-trigger{
				width: 170px;
				background-color: #263C4D;
				display: inline-block;
				vertical-align: top;
				color: rgb(228, 228, 228);
				border-top-left-radius: 5px;
				border-bottom-left-radius: 5px;
				cursor: pointer;
				box-shadow: -2px 0px 7px -4px;
				box-shadow: -2px 0px 7px -4px rgba(225,225,225,0.65);
				-moz-box-shadow: -2px 0px 7px -4px rgba(225,225,225,0.65);
				-webkit-box-shadow: -2px 0px 7px -4px rgba(225,225,225,0.65);
			}

			.downloadApp-trigger h4{
				padding-left: 10px;
				padding-right: 10px;
				padding-bottom: 10px;
			}
			.downloadApp-trigger h4 a {
				/*display: block; */
				color:white !important;
				text-decoration:  none;
			}
			.downloadApp-trigger h4:hover span{
				color: #ffd650;
			}
			.rotated-text {
			    display: inline-block;
			    overflow: hidden;
			    width: 1.5em;
			}
			.rotated-text__inner {
			    display: inline-block;
			    letter-spacing: 2px;
			  transform: rotate(-90deg);
			  /*transform-origin:top left;*/
			  -ms-transform: rotate(-90deg); /* IE 9 */
			  /*-ms-transform-origin:top left; /* IE 9 */
			  -webkit-transform: rotate(-90deg); /* Safari and Chrome */
			  /*-webkit-transform-origin:top left; /* Safari and Chrome */
			  -moz-transform: rotate(-90deg); /* Firefox */
			  /*-moz-transform-origin:top left; /* Firefox */
			  -o-transform: rotate(-90deg); /* Opera */
			  /*-o-transform-origin:top left; /* Opera */
			}
			.rotated-text__inner:before {
			    content: "";
			    float: left;
			    margin-top: 100%;
			}
			.menuMain .menu__items, .menuMain .menu__items.active, .menuMain .menu__items:hover{
				background-size: 85% !important;
			}


			@media only screen and (max-width: 420px){
				.navbar-header .navbar-brand img{
					height: 100%;
					width: auto;
				}
			}

		</style>
		<link rel="stylesheet" type="text/css" href="css/index-redesigned-1.1.min.css" />

		<!-- CleverTap Integration -->
		<script type="text/javascript">
		 var clevertap = {event:[], profile:[], account:[], onUserLogin:[], notifications:[]};
		 clevertap.account.push({"id": ""});
		 (function () {
				 var wzrk = document.createElement('script');
				 wzrk.type = 'text/javascript';
				 wzrk.async = true;
				 wzrk.src = ('https:' == document.location.protocol ? '' : '') + '/js/a.js';
				 var s = document.getElementsByTagName('script')[0];
				 s.parentNode.insertBefore(wzrk, s);
		  })();
		</script>
		
	</head>
    <body>
		<!-- TOP MENU BAR -->
		<!--<div class="">
		
		<div style="background:#002555; color:#fff;padding: 4px;">
			<div class="auto-container" >
    <div class="row">
    <div class="col-lg-8" style="color:#fff;font-size:14px;"><i class="fa fa-phone"></i>&nbsp;&nbsp;+91 9102938231 &nbsp;<i class="fa fa-envelope"></i>&nbsp;&nbsp;support@dhobigali.com    &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  Promocode <span style="color:yellow;">DOB01</span> 10% Discount 
</div>
    <div class="col-lg-4">&nbsp; <a href="loginu.php" style="color:#fff;font-size:14px;">  &nbsp;Customer Zone </a>&nbsp; | &nbsp;&nbsp;&nbsp;
	<a href="lu/loginu.php" style="color:#fff;font-size:14px;"> Laundry Zone</a>
	
	<a href="vcart.php" title="Cart" Style="font-size:12px;padding-left:12px;color:#fff">
	<i class="fa fa-shopping-cart">&nbsp;</i>CART <span class="cart-item" id="cart-container">ttt</span></a>
	
	 </div>
    </div>
    </div>
		</div>
		
		</div>-->
	<!-- header -->
	<nav class="navbar material_navbar material_navbar_danger" id="header">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div data-dialog="somedialog" class="trigger hidden-sm hidden-md hidden-lg smallCart" onclick="javascript: openCart();">
					<a style="cursor: hand; cursor: pointer;color: #273D4B;">
						<i class="fa fa-shopping-cart"></i>
						<span class="cartItemsCount" style="background-color: blue;color:#fff;padding:0px 3px 0px 2px;border-radius:5px 5px;">0</span>
					</a>
				</div>
				<a class="navbar-brand material_navbar_brand" href=""><img src="images/tsz_logo.png" alt="Logo" /></a>
			</div>
			<div class="navbar-collapse collapse navbar-warning-collapse">
				<ul class="nav navbar-nav navbar-right material_navbar_nav">
				<li><a href="" class="material_navbar_nav_item" >
							<span class="hidden-xs hidden-sm hideName">&nbsp; Home</span></a></li>
					
					
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="cursor: hand; cursor: pointer;"><span class="hidden-xs hidden-sm hideName"> | &nbsp; Our Services</span><span class="caret"></span></a>
						<ul class="dropdown-menu material_dropdown_menu" role="menu">
							<li><a href="#" class="material_dropdown_menu_link">Cleaning</a></li>
							<li><a href="#" class="material_dropdown_menu_link">Repairs</a></li>
							<li><a href="#" class="material_dropdown_menu_link">Pest-Control</a></li>
							<li><a href="#" class="material_dropdown_menu_link">Car-Spa</a></li>
							<li><a href="#" class="material_dropdown_menu_link">Painting</a></li>
							<li><a href="#" class="material_dropdown_menu_link">Handyman</a></li>
						</ul>
					</li>
					<li><a href="#" class="material_navbar_nav_item">Packages <span class="badge" style="background-color: red">new</span></a></li>

					<li><a href="#" class="material_navbar_nav_item" target="_blank">
							<span class="hidden-xs hidden-sm hideName"> | &nbsp; Offers</span></a></li>

					

					

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="cursor: hand; cursor: pointer;"><span class="hidden-xs hidden-sm hideName"> | &nbsp; <span itemprop="areaServed">Patna</span></span> <span class="caret"></span></a>
						<ul class="dropdown-menu material_dropdown_menu" role="menu">
							<li><a href='#' class='material_dropdown_menu_link citySelectionTopMenu' data-cityName='Mumbai' data-cityID='1'>Danapur</a></li>
							<li><a href='#' class='material_dropdown_menu_link citySelectionTopMenu' data-cityName='Pune' data-cityID='2'>Saguna More</a></li>
							<li><a href='#' class='material_dropdown_menu_link citySelectionTopMenu' data-cityName='Bangalore' data-cityID='3'>Golaroad</a></li>
							<li><a href='#' class='material_dropdown_menu_link citySelectionTopMenu' data-cityName='Hyderabad' data-cityID='5'>Khagual</a></li>
							<li><a href='#' class='material_dropdown_menu_link citySelectionTopMenu' data-cityName='Gurgaon' data-cityID='6'>Boring Road</a></li>
							<li><a href='#' class='material_dropdown_menu_link citySelectionTopMenu' data-cityName='Delhi' data-cityID='8'>Gpo</a></li>
							<li><a href='#' class='material_dropdown_menu_link citySelectionTopMenu' data-cityName='Chennai' data-cityID='11'>Gandhi Maidan</a></li>						</ul>
					</li>
					<li class="dropdown">
													<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="cursor: hand; cursor: pointer;"><!--<i class="material-icons">person</i>--><span class="hidden-xs hidden-sm hideName"> | &nbsp; My Account</span><span class="caret"></span></a>
												<ul class="dropdown-menu material_dropdown_menu" role="menu">
														<li><a href="#" class="material_dropdown_menu_link"> Login </a></li>
														</ul>
					</li>
					<li><a href="#" class="material_navbar_nav_item callButtonHelplineHeader">| <i class="fa fa-phone"></i><span class="hidden-xs hidden-sm hideName">  &nbsp; 900000000</span></a></li>
					<li data-dialog="somedialog" class="trigger hidden-xs " onclick="javascript: openCart();" ><a style="cursor: hand; cursor: pointer;" class="cartReviewTrigger"><i class="fa fa-shopping-cart"></i>&nbsp;<span class="cartItemsCount" style="background-color: blue; padding:0px 3px 0px 2px;border-radius:5px 5px;color:yellow;"> 0</span></a>
						
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- header end -->

	<div class="">
		<!-- Slider Section -->
		<div class="container-fluid bannerMain">

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div id="owl-banner" class="owl-carousel owl-theme">
					 <div class="item">
						<a href="#" class="imgBanners" data-bannerName="ac10"><img src="images/502.png" alt="Timesaverz ac10"/></a>
					 </div>
					 <div class="item">
						<a href="#" class="imgBanners" data-bannerName="pegdolls homeandsofa cleaning"><img src="images/502.png" alt="Timesaverz pegdolls homeandsofa cleaning"/></a>
					 </div>
					 <div class="item">
						<a href="#" class="imgBanners" data-bannerName="pestcontrolpegdolls"><img src="images/502.png" alt="Timesaverz pestcontrolpegdolls"/></a>
					 </div>
					 <div class="item">
						<a href="#" class="imgBanners" data-bannerName="pegdollscarspa"><img src="images/502.png" alt="Timesaverz pegdollscarspa"/></a>
					 </div>
					 <div class="item">
						 <a href="#" class="imgBanners" data-bannerName="pegdollrepair"><img src="images/502.png" alt="Timesaverz pegdollrepair"/></a>
					 </div>
					 <div class="item">
						 <a href="#" class="imgBanners" data-bannerName="pegdollhandyman"><img src="images/502.png" alt="Timesaverz pegdollhandyman"/></a>
					 </div>				
				</div>
			</div>

			<!-- menu end -->
		</div>
		<!-- BANNER SECTION ENDS -->
		<div class="menuMain col-md-12 col-sm-12 col-xs-12">
				<a href='#' class='buttonSupercategory' data-supercategoryName='Cleaning'>
									<i class='hovicon effect-1 sub-a'>
										<span class='menu__items' style='bottom: 2px; left: 2px;background-image:url(images/6.png);' data-supercategoryid='1'></span>
									</i>
									<span>cleaning</span>
								  <span class='triangle'></span>
								  </a>
								  <a href='#' class='buttonSupercategory' data-supercategoryName='Repairs'>
									<i class='hovicon effect-1 sub-a'>
										<span class='menu__items' style='bottom: 2px; left: 2px;background-image:url(images/21.png);' data-supercategoryid='2'></span>
									</i>
									<span>repairs</span>
								  <span class='triangle'></span>
								  </a>
								  <a href='#' class='buttonSupercategory' data-supercategoryName='Pest-Control'>
									<i class='hovicon effect-1 sub-a'>
										<span class='menu__items' style='bottom: 2px; left: 2px;background-image:url(images/17.png);' data-supercategoryid='6'></span>
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
				<!-- menu items -->
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

								 </div>				<!-- menu items end -->
				<div class="clearfix"></div>
			</div>
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
			<img src="images/florida-plumber.jpg" class="img-responsive"/>
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
					<img src="images/service-1.png" alt="Awesome Image" class="img-responsive">
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
	<style>
		/**********************
/***** Services *******
/*********************/
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section{
	padding: 60px 0;
}
section .section-title{
	text-align:center;
	color:#007b5e;
	margin-bottom:50px;
	text-transform:uppercase;
}
#what-we-do{
	background:#ffffff;
}
#what-we-do .card{
	padding: 1rem!important;
	border: none;
	margin-bottom:1rem;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#what-we-do .card:hover{
	-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
#what-we-do .card .card-block{
	padding-left: 50px;
    position: relative;
}
#what-we-do .card .card-block a{
	color: #007b5e !important;
	font-weight:700;
	text-decoration:none;
}
#what-we-do .card .card-block a i{
	display:none;
	
}
#what-we-do .card:hover .card-block a i{
	display:inline-block;
	font-weight:700;
	
}
#what-we-do .card .card-block:before{
	font-family: FontAwesome;
    position: absolute;
    font-size: 39px;
    color: #007b5e;
    left: 0;
	-webkit-transition: -webkit-transform .2s ease-in-out;
    transition:transform .2s ease-in-out;
}
#what-we-do .card .block-1:before{
    content: "\f0e7";
}
#what-we-do .card .block-2:before{
    content: "\f0eb";
}
#what-we-do .card .block-3:before{
    content: "\f00c";
}
#what-we-do .card .block-4:before{
    content: "\f209";
}
#what-we-do .card .block-5:before{
    content: "\f0a1";
}
#what-we-do .card .block-6:before{
    content: "\f218";
}
#what-we-do .card:hover .card-block:before{
	-webkit-transform: rotate(360deg);
	transform: rotate(360deg);	
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
	</style>
	<!-- Services section -->
		<!-- contact Section Start-->
		<div class="service-banner ">
        	<div class="container">
			<div class="row relative-position callarea">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <img src="images/footer-img.png" alt="Service Provider Image">
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

		
		






<script src="js/jquery-1.11.2.min1.js"></script>
<script type="text/javascript">
	//Load date and time selection
	var enabledStartDate = "";
	var enabledDates = [];
	var forbiddenDates = ['01-05-2017'];
	var availableDatesAndSlots = [];
	var currentDate = "";
	var destroyDatepicker = false;

	function loadAvailableDates(categoryID)
	{
		enabledDates = [];
		enabledStartDate = "";
		availableDatesAndSlots = [];
		currentDate = "";

		$.ajax({
			url		: '/api/bookingSlotsHandler.php',
			data	: 'categoryID=' + categoryID,
			type    : 'POST',
			beforeSend: function(){
				$("#schedule-dialog .modal-content > div").css('visibility', 'hidden');
				$("#schedule-dialog .modal-content").addClass("loadingDatepicker");
				$("#datepicker").hide();

				// $("#schedule-dialog .dateLoader").show();

			},
			complete: function(){
				$("#schedule-dialog .modal-content").removeClass("loadingDatepicker");
				$("#schedule-dialog .modal-content > div").css('visibility', 'visible');
				// $("#schedule-dialog .dateLoader").hide();
				$("#datepicker").show();

			},
			success : function(response)
			{
				var data = jQuery.parseJSON(response);
				if(data.status == "successful")
				{
					availableDatesAndSlots = data.dates;

					for(var i = 0; i < data.dates.length; i++)
					{
						enabledDates.push(data.dates[i].actualDate);
					}

					//Check if datepicker has been loaded once, destroy it and reinitialize
					if(destroyDatepicker)
					{
						$('#datepicker').datepicker('update', '');
					}

					$('#datepicker').datepicker({
						format				: 'dd-mm-yyyy',
						autoclose			: false,
						disableTouchKeyboard : true,
						beforeShowDay: function (dt) {
							var y = dt.getFullYear();
							var m = ((dt.getMonth() + 1) + "").length < 2 ? ('0' + (dt.getMonth() + 1)) : (dt.getMonth() + 1);
							var d = (dt.getDate() + "").length < 2 ? ('0' + dt.getDate()) : dt.getDate();
							currentDate = y + '-' + m + '-' + d;
							if(enabledDates.indexOf(currentDate) != -1)
							{
								if(enabledStartDate == "")
								{
									enabledStartDate = d + '-' + m + '-' + y;
								}
							}

							return (enabledDates.indexOf(currentDate) != -1);
						}
					});

					//On Datepicker Loaded
					$("#enabledStartDate").val(enabledStartDate);
					$('#datepicker').datepicker('setDate', enabledStartDate);
					destroyDatepicker = true;

					var selectedDate = $("#datepicker").data('datepicker').getFormattedDate('yyyy-mm-dd');
					loadAvailableSlots(selectedDate);

					//Set default date / time selections
					$("select[name='timeFixedSlot']").each(function(){
						if($(this).hasClass("visibleTimeslotDropdown") == true)
							visibleDropdown = $(this).attr("id");
					});
					var formattedDate = $("#datepicker").data('datepicker').getFormattedDate('dd-mm-yyyy');
					var formattedTime = $("#" + visibleDropdown + " option:selected").html();

					$("#serviceDateTime").html(formattedDate + " (" + formattedTime + ")");
				}
			}
		});
	}

	function loadAvailableSlots(selectedDate)
	{
		$("#timeFixedSlot").html("");

		for(var i = 0; i < availableDatesAndSlots.length; i++)
		{
			if(availableDatesAndSlots[i].actualDate == selectedDate)
			{
				for(var j = 0; j < availableDatesAndSlots[i].slots.length; j++)
				{
					$("#timeFixedSlot").append("<option value='" + availableDatesAndSlots[i].slots[j].actualFixedTime + "'>" + availableDatesAndSlots[i].slots[j].formattedSlot + "</option>");
				}
			}
		}
	}

	$(document).ready(function() {
		//On Change Date
		$('#datepicker').on('changeDate', function () {
			var selectedDate = $("#datepicker").data('datepicker').getFormattedDate('yyyy-mm-dd');
			loadAvailableSlots(selectedDate);
		});
	});

</script>
<script type="text/javascript">
	    var paint_type = null;
	    var paintable_area = null;
	    var paint_brand = null;
	    var paint_city = null;
	    var paint_product = null;
	    var paint_rate = null;

	    $("#calculatenow").click(function () {
	        paint_type = $('input[name=painttype]:checked').val();
	        paintable_area = $("#pe-modal-paintable-area").html();
	        paint_brand = $("#paintbrand").val();
	        paint_product = $("#paintproduct").val();
	        categoryID = $("#categoryID").val();

			$.ajax
		        ({
		            type: "POST",
		            url: "/api/getPaintRate.php",
		            dataType: 'json',
		            async: true,
		            data: {
		                "categoryID":categoryID,
		                "productName":paint_product,
		                "brandName":paint_brand,
		            },
		            success: function (response) {

		            	   if(response.status=="successful"){

			                  	 paint_rate = response.paint_rate;
								  calculateRate(paint_rate);

			                }else{
			                    alert("Unable to calculate the estimate, please try again later!");
			                    $("#calculatenow").removeClass("disabled");
			                }
		            }
		        });

		    function calculateRate(paint_rate)
		    {

		        var final_price = paint_rate * paintable_area;
		        $("#calculatenow").addClass("disabled");
		        var myDate=new Date();
		        myDate.setDate(myDate.getDate()+1);
		        var dt = myDate.getFullYear() + '-' + ("0" + (myDate.getMonth() + 1)).slice(-2) + '-' + myDate.getDate();
		        var flg = 0;
		        var mobile_number = $("#pe-mobile-number").val();

		        if(mobile_number == "" && flg == 0){
		        	alert("Please provide a mobile number");
					flg = 1;
					$("#calculatenow").removeClass("disabled");
		        }

		        if(mobile_number.length < 10 && flg == 0)
				{
					alert("Please provide a valid mobile number");
					flg = 1;
					$("#calculatenow").removeClass("disabled");
				}

		        if(flg == 0){
			        $.ajax
			        ({
			            type: "POST",
			            url: "/api/addLead.php",
			            dataType: 'json',
			            async: true,
			            data: {
			                "userMobileNumber":$("#pe-mobile-number").val(),
			                "userEmailAddress":"default",
			                "userFullName":"default",
			                "cityID":getCookie("timesaverzUserCity"),
			                "variableID":$("#variables option:selected").attr("data-variableid"),
			                "areaID":1,
			                "pinCode":400014,
			                "totalCost":final_price,
			                "jobDate":dt,
			                "jobTime":"2",
			                "jobAddress":"default",
			                "jobPaymentType":"pending",
			                "jobBookedFrom":"web",
			                "followupDate":"",
			                "jobQuantity":"1",
			                "jobStatus":"pending",
			                "utm_source":"painting-estimator",
			                "utm_medium":getCookie("timesaverz_utm_medium"),
			                "utm_term":getCookie("timesaverz_utm_term"),
			                "utm_campaign":getCookie("timesaverz_utm_campaign"),
			                "gclID":getCookie("timesaverz_gclID"),
			                "remarks":""
			            },
			            success: function (response) {
			                if(response.status=="successful"){
			                    $("#pe-modal-count-price").html(final_price);
			                    $(".pe-modal-result").fadeIn();
			                    setTimeout(showResults, 500);
			                    $("#calculatenow").removeClass("disabled");
			                }else{
			                    alert("Unable to calculate the estimate, please try again later!");
			                    $("#calculatenow").removeClass("disabled");
			                }
			            }
			        });

		        }


		   }
		});


	    function showResults() {
	        $(".result-loader").hide();
	        $(".final").show();
	        increaseCount();
	        $('#paint-estimator').data('bs.modal').handleUpdate();
	    }
	    function increaseCount() {
	        $('#pe-modal-count-price').each(function () {
	            $(this).prop('Counter', 0).animate({
	                Counter: $(this).text()
	            }, {
	                duration: 1000,
	                easing: 'swing',
	                step: function (now) {
	                    $(this).text(Math.ceil(now));
	                }
	            });
	        });
	    }

	    var min = 0;
	    var max = 3500;
	    var prices_arr = [0];
	    for (var x = 0; x <= max; x++) {
	        if (x % 10 == 0) {
	            prices_arr.push(x);
	        }

	    }
	    $(function () {
	        $(".slider").slider(
	                {
	                    value: 100,
	                    animate: "slow",
	                    orientation: "horizontal",
	                    min: min,
	                    max: (max / 10),
	                    slide: imSliding
	                }
	        );
	    });

	    function imSliding(event, ui) {
	        //update the amount by fetching the value in the value_array at index ui.value
	        $('#pe-modal-area').val(prices_arr[ui.value]);
	        $('#pe-modal-paintable-area').html((prices_arr[ui.value] * 1.5));
	    }

	    $("#pe-modal-area").val("1000");
	    $('#pe-modal-paintable-area').html("1500");

	    $('#pe-modal-area').on('input', function() {
	        if($('#pe-modal-area').val()<=3500){
	            $(".slider").slider('value',$('#pe-modal-area').val()/10);
	            $('#pe-modal-paintable-area').html(($('#pe-modal-area').val() * 1.5));
	        }else{
	            alert("Area cannot be greater than 3500 sqft.");
	        }

	    });



	    $(document).ready(function(){
	        $("#paintbrand").dropdown();
	        $("#paintproduct").dropdown();
	    })
</script>


		<!--- FOOTER AREA --->
		
	</div> 


	
	
	
<!--footer-->
<footer class="footer1" style="0px 20px 0px 20px;">
<div class="container">

<div class="row"><!-- row -->
            
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>
                                	<li><a  href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Terms & Conditions</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Faq</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Enquiry</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Careers</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Privacy & Policy</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Support & Center</a></li>
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Our Services</h1>
                                
                                <ul>
 									<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Cleaning</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Cleaning</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Painting</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Cleaning</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Cleaning</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Cleaning</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Cleaning</a></li>
                                    <li><a  href="#" target="_blank"><i class="fa fa-angle-double-right"></i> Cleaning</a></li>
                                    
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Our Location</h1>
                                
                                <ul>


                <li><a href="#"><i class="fa fa-angle-double-right"></i> Patna</a></li>
 				<li><a href="#"><i class="fa fa-angle-double-right"></i> Gaya</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Ara</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Buxar</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Siwan</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Arwal</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i>  Patna</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>  Danapur</a></li>

                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                
                   
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Contact Detail </h1>
                                
                                <div class="footerp"> 
                                
                                <h2 class="title-median">Demo Pvt. Ltd.</h2>
                                <p><b>Email id:</b> <a href="mailto:info@webenlance.com">info@demo.com</a></p>
                                <p><b>Helpline Numbers </b>

    <b style="color:#ffc106;">(8AM to 10PM):</b>  +91-9800000000, +91-9000000000  </p>
    
    <p><b>Corp Office / Postal Address</b></p>
    <p><b>Phone Numbers : </b>900000000, </p>
    <p> +91-9000000000, 9000000000</p>
                                </div>
                                
                                <div class="social-icons">
                                
                                	<ul class="nomargin">
                                    
                <a href="#"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
	            <a href="#"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
	            <a href="#"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
	            <a href="mailto:demo@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                                    
                                    </ul>
                                </div>
                    		</li>
                          </ul>
                       </div>
                </div>
</div>
</footer>
<!--header-->

<div class="footer-bottom">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="copyright">

					© 2018 All rights reserved.

				</div>

			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="design">

					 <a href="#"> </a>   <a target="_blank" href="#">  </a>

				</div>

			</div>

		</div>

	</div>

</div>   <!-- end n footer -->


	

	
	
	
		<!--------- Common Scripts ---------->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/material.min-1.1.js"></script>
<script src="js/ripples.min.js"></script>
<script src="js/main-1.2.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.dropdown.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/jquery.li-scroller.1.0.js"></script>
<script src="js/perfect-scrollbar.js"></script>


<!-- Scripts end -->
<script type="text/javascript">
    $(document).ready(function () {
        $("#owl-banner").owlCarousel({
            singleItem: true,
            autoPlay: true,
            navigation: false
        });


        $("#owl-testmonials").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true,
            loop: true,
            stopOnHover: true
        });


        $("#serviceTestimonials").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true,
            stopOnHover: true
        });

        $("#owl-offer").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true,
            stopOnHover: true
        });

        $.material.init();
        customStyles();

        // hide testimonial section if no testimonials available
        if($("#owl-testmonials .item").size() == 0){
            $(".customerSays").hide();
        }
        if($("#blog .item").size() == 0){
            $(".blog").hide();
        }
        else{

        }
        $("#blog .owl-prev").hide();

		if(getCookie("selectionPopupShown") == "true")
		{
			clevertap.notifications.push({
				"titleText": 'Stay up to date with order updates, special offers and discounts!',
				"bodyText": 'Exclusive and tailored content, delivered right to your browser.',
				"okButtonText":'Sign Me Up!',
				"rejectButtonText":'No thanks',
				"okButtonColor":'#f28046'
			});
		}
    });
    // recommendation engine
    var owl = $("#recommendedServices");

    $('#recommendedServices').owlCarousel({
        loop: true,
        margin: 10,
        navigation: true,
        autoplay: true,
        responsive: true,
        items: 4,
        afterMove: function (owl) {
            data = $(owl).data('owlCarousel');
            isLast = data.currentItem + data.visibleItems.length == data.itemsAmount;
            isFirst = data.currentItem == 0;
            if (isLast) { //returns true when reaches the last
                //do stuffs
                $("#recommendedServices .owl-next").hide();
                $("#recommendedServices .owl-prev").show();
            }
            else if (isFirst) {
                $("#recommendedServices .owl-prev").hide();
                $("#recommendedServices .owl-next").show();
            }
            else {
                $("#recommendedServices .owl-next").show();
                $("#recommendedServices .owl-prev").show();
            }
        },
        afterInit: function (owl) {
            if ($("#recommendedServices .owl-wrapper").width() > $("#recommendedServices .owl-wrapper-outer").width()) {
                $("#recommendedServices .owl-next").show();
            }
            var slider_width = 0;
            $("#recommendedServices .owl-item").each(function () {
                slider_width += $(this).width();
            })
            if (slider_width < $("#recommendedServices .owl-wrapper-outer").width()) {
                $("#recommendedServices .owl-next").hide();
            }
        }

    })

     $('#blog').owlCarousel({
        loop: true,
        margin: 10,
        navigation: true,
        autoplay: true,
        responsive: true,
        items: 4,
        afterMove: function (owl) {
            data = $(owl).data('owlCarousel');
            isLast = data.currentItem + data.visibleItems.length == data.itemsAmount;
            isFirst = data.currentItem == 0;
            if (isLast) { //returns true when reaches the last
                //do stuffs
                $("#blog .owl-next").hide();
                $("#blog .owl-prev").show();
            }
            else if (isFirst) {
                $("#blog .owl-prev").hide();
                $("#blog .owl-next").show();
            }
            else {
                $("#blog .owl-next").show();
                $("#blog .owl-prev").show();
            }
        },
        afterInit: function (owl) {
            if ($("#blog .owl-wrapper").width() > $("#blog .owl-wrapper-outer").width()) {
                $("#blog .owl-next").show();
            }
            var slider_width = 0;
            $("#blog .owl-item").each(function () {
                slider_width += $(this).width();
            })
            if (slider_width < $("#blog .owl-wrapper-outer").width()) {
                $("#blog .owl-next").hide();
            }

            var itemHeight = [];
        	$("#blog .item").size();
        	$("#blog .item").each(function(){
        		itemHeight.push($(this).children(".card").height());
        	})

	        var arrayLength = itemHeight.length;
		    var currentItem = itemHeight[0];
		    var nextItem ="";
		    var maxItemHeight = "";
	        for (var i = 1; i + 1 < arrayLength; i++) {
	        	nextItem = itemHeight[i];
	        	if(nextItem > currentItem){
	        		maxItemHeight = nextItem;
	        		nextItem = itemHeight[i+1];

	        	}
	        	else if(currentItem > nextItem){
	        		maxItemHeight = currentItem;
	        		currentItem = itemHeight[i];
	        		nextItem = itemHeight[i+1];
	        	}
	        	else{
	        		maxItemHeight = nextItem;
	        		nextItem = itemHeight[i+1];
	        	}

			    //Do something
			}
        	$("#blog .item .card").css("height",maxItemHeight+"px");
        }

    })

    // recommendation engine end

    $(window).resize(function () {
        customStyles();
    });

    function customStyles() {
        if ($(window).width() <= 420) {
            ($(".hideName").toggleClass("hidden-xs"));
        }
    }

    $(document).scroll(function () {
        if($(window).scrollTop() >= 90) {
            $("#header.navbar").css({
                'background-color': '#fff',
                'box-shadow': '0 1px 3px #bcbcbc'
            });



        } else {
            $("#header.navbar").css({
                'background-color': '#f1f1f3',
                'box-shadow': 'none'
            });

        }
    });

	//CleverTap events
	$(".citySelectionPopup").on("click", function()
	{
		clevertap.event.push("Visited Screen", {
		  "Screen Name": "City Selection",
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});

		clevertap.event.push("City Selection", {
		  "Location Interaction": "Popup",
		  "City ID Selected": $(this).attr("data-cityID"),
		  "City Name Selected": $(this).attr("data-cityName"),
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".citySelectionTopMenu").on("click", function()
	{
		clevertap.event.push("City Selection", {
		  "Location Interaction": "Top Menu",
		  "City ID Selected": $(this).attr("data-cityID"),
		  "City Name Selected": $(this).attr("data-cityName"),
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".footerLinksCities").on("click", function()
	{
		clevertap.event.push("City Selection", {
		  "Location Interaction": "Footer",
		  "City ID Selected": $(this).attr("data-cityID"),
		  "City Name Selected": $(this).attr("data-cityName"),
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".callButtonHelplineHeader").on("click", function()
	{
		clevertap.event.push("Call Button Clicked", {
		  "Call To": "Timesaverz - Top Menu",
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".callButtonHelplineFooter").on("click", function()
	{
		clevertap.event.push("Call Button Clicked", {
		  "Call To": "Timesaverz - Footer",
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".buttonLogout").on("click", function()
	{
		clevertap.event.push("Button Clicked", {
		  "Button Name": "Logout",
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".buttonViewRateCard").on("click", function()
	{
		clevertap.event.push("Viewed Rate Card", {
		  "Service Name": $("#serviceName").val(),
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".buttonCompareServices").on("click", function()
	{
		clevertap.event.push("Visited Screen", {
		  "Screen Name": "Comparison Selection",
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	function updateUserCleverTapProfile(customerName, customerID, customerEmailAddress, customerMobileNumber, customerGender, customerMarried, customerDOB, customerMinutes)
	{
		customerMobileNumber = "+91" + customerMobileNumber;
		customerMarried = !customerMarried ? "N" : "Y";
		customerDOB = !customerDOB ? '' : new Date(customerDOB);
		customerGender = !customerGender ? '' : customerGender.charAt(0).toUpperCase();
		var customerCityName = getCookie("timesaverzUserCityName");

		clevertap.onUserLogin.push({
			"Site": {
				"Name": customerName,
				"Identity": customerID,
				"Email": customerEmailAddress,
				"Phone": customerMobileNumber,
				"Gender": customerGender,
				"Married": customerMarried,
				"DOB": customerDOB,
				"Customer City Name": customerCityName,
				"User Minutes": customerMinutes
			}
		});
	}

</script>

<script type="text/javascript">
    $(function () {
        $("ul#areasServed").liScroll();
    });
</script>

<script src="js/classie.js"></script>
<script src="js/dialogFx.js"></script>
<script src="js/cartPopup-1.16.min.js"></script>
<script src="js/modalEffects.js"></script>
<script type="text/javascript" src="js/feedbackSlide.min.js"></script>

<script src="js/ouibounce.js"></script>







<script type="text/javascript" src="js/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="#"/>
    </div>
</noscript>

<style type="text/css">
    iframe[name='google_conversion_frame'] {
        height: 0 !important;
        width: 0 !important;
        line-height: 0 !important;
        font-size: 0 !important;
        margin-top: -13px;
        float: left;
    }
</style>

<img id="imgConversion" height="1" width="1" style="border-style:none;display:none;" alt=""
     src=""/>
<!-- End of Google Code for remarketing -->
		<!------- End Common Scripts -------->


		<script src="js/serviceMenu-1.3.min.js"></script>
		<script src="js/animateFunction-1.6.min.js"></script>
		<!------ Page Specific Scripts ------>
		<script type="text/javascript">
			//CleverTap events
			clevertap.event.push("Visited Screen", {
			  "Screen Name": "Supercategory Listing",
			  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
			});

			$(".imgBanners").on("click", function()
			{
				clevertap.event.push("Banner Clicked", {
				  "Banner Name": $(this).attr("data-bannerName"),
				  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
				});
			});

			$(".buttonSupercategory").on("click", function()
			{
				clevertap.event.push("Supercategory Selected", {
				  "Supercategory Name": $(this).attr("data-supercategoryName"),
				  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
				});
			});
		</script>
		<script>
				$('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
		</script>
	</body>
</html>

		<!--http://html.tonatheme.com/2017/plumber-aventex/ -->
		
		<!-- https://bootsnipp.com/snippets/e3Oe3  bootstrap drop down menu-->