
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

				<a class="navbar-brand material_navbar_brand" href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/cityook/images/tsz_logo.png');?>" alt="Logo" /></a>

			</div>

			<div class="navbar-collapse collapse navbar-warning-collapse">

				<ul class="nav navbar-nav navbar-right material_navbar_nav">

				<li><a href="<?php echo base_url();?>" class="material_navbar_nav_item" >

							<span class="hidden-xs hidden-sm hideName">&nbsp; Home</span></a></li>

					

					

					<li class="dropdown">

						<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="cursor: hand; cursor: pointer;"><span class="hidden-xs hidden-sm hideName">  &nbsp; Our Services</span><span class="caret"></span></a>

						<ul class="dropdown-menu material_dropdown_menu" role="menu">

							<li><a href="<?php echo base_url();?>cleaning" class="material_dropdown_menu_link">Cleaning</a></li>

							<li><a href="<?php echo base_url();?>repairs" class="material_dropdown_menu_link">Repairs</a></li>

							<li><a href="<?php echo base_url();?>pest-control" class="material_dropdown_menu_link">Pest-Control</a></li>

							<li><a href="<?php echo base_url();?>car-spa" class="material_dropdown_menu_link">Car-Spa</a></li>

							<li><a href="<?php echo base_url();?>painting" class="material_dropdown_menu_link">Painting</a></li>

							<li><a href="<?php echo base_url();?>handyman" class="material_dropdown_menu_link">Handyman</a></li>

						</ul>

					</li>

					<li><a href="#" class="material_navbar_nav_item">Packages <!--<span class="badge" style="background-color: red">new</span>--></a></li>



					<li><a href="#" class="material_navbar_nav_item" target="_blank">

							<span class="hidden-xs hidden-sm hideName">  &nbsp; Offers</span></a></li>



					



					



					<li class="dropdown">

						<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="cursor: hand; cursor: pointer;"><span class="hidden-xs hidden-sm hideName">  &nbsp; <span itemprop="areaServed">Patna</span></span> <span class="caret"></span></a>

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

						<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="cursor: hand; cursor: pointer;"><!--<i class="material-icons">person</i>--><span class="hidden-xs hidden-sm hideName">  &nbsp; My Account</span><span class="caret"></span></a>

						<ul class="dropdown-menu material_dropdown_menu" role="menu">

							<?php if(!empty($this->session->userdata('loggedIn')) && $this->session->userdata('loggedIn') === TRUE) { ?>

							

							<li><a href="<?php echo base_url();?>my-account" class="material_dropdown_menu_link"> My Account </a></li>
							<li><a href="<?php echo base_url();?>logout" class="material_dropdown_menu_link"> Logout </a></li>

							<?php } else { ?>

							<li><a href="<?php echo base_url();?>login" class="material_dropdown_menu_link"> Login </a></li>

							<li><a href="<?php echo base_url();?>register" class="material_dropdown_menu_link"> Register </a></li>

							<li><a href="<?php echo base_url();?>employee/register/" class="material_dropdown_menu_link"> Become A Partner </a></li>

							<?php } ?>

							

						</ul>

					</li>

					<li><a href="#" class="material_navbar_nav_item callButtonHelplineHeader"> <i class="fa fa-phone"></i><span class="hidden-xs hidden-sm hideName">  &nbsp; 900000000</span></a></li>

					<li data-dialog="somedialog" class="trigger hidden-xs " onclick="openCart();" ><a style="cursor: hand; cursor: pointer;" class="cartReviewTrigger"><i class="fa fa-shopping-cart"></i>&nbsp;<span class="cartItemsCount" style="background-color: blue; padding:0px 3px 0px 2px;border-radius:5px 5px;color:yellow;">
					
					
					<?php echo ($numOfCartItems) ? $numOfCartItems : 0 ?></span></a>

						

					</li>

				</ul>

			</div>

		</div>

	</nav>

	


	