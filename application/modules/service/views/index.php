<?php echo $head;?>
<style>
    fieldset 
	{
		border: 1px solid #000 !important;
		margin: 0;
		xmin-width: 0;
		padding: 10px;       
		position: relative;
		border-radius:4px;
		/* background-color:#f5f5f5; */
		padding-left:10px!important;
	}	
	
		legend
		{
			font-size:14px;
			font-weight:bold;
			margin-bottom: 0px; 
			width: 35%; 
			border: 1px solid #000;
			border-radius: 4px; 
			padding: 5px 5px 5px 10px; 
			background-color: #ffffff;
			
		}
</style>
<script src="https://use.fontawesome.com/b4564248e6.js"></script><!-- radio start -->
<style>
	.frb-group {
	margin: 15px 0;
}

.frb ~ .frb {
	margin-top: 15px;
}

.frb input[type="radio"]:empty,
.frb input[type="checkbox"]:empty {
	display: none;
}

.frb input[type="radio"] ~ label:before,
.frb input[type="checkbox"] ~ label:before {
	font-family: FontAwesome;
	content: '\f096';
	position: absolute;
	top: 50%;
	margin-top: -11px;
	left: 15px;
	font-size: 22px;
}

.frb input[type="radio"]:checked ~ label:before,
.frb input[type="checkbox"]:checked ~ label:before {
	content: '\f046';
	background-img:url();
}

.frb input[type="radio"] ~ label,
.frb input[type="checkbox"] ~ label {
	position: relative;
	cursor: pointer;
	width: 100%;
	border: 1px solid #ccc;
	border-radius: 5px;
	background-color: #f2f2f2;
}

.frb input[type="radio"] ~ label:focus,
.frb input[type="radio"] ~ label:hover,
.frb input[type="checkbox"] ~ label:focus,
.frb input[type="checkbox"] ~ label:hover {
	box-shadow: 0px 0px 3px #333;
}

.frb input[type="radio"]:checked ~ label,
.frb input[type="checkbox"]:checked ~ label {
	color: #fafafa;
}

.frb input[type="radio"]:checked ~ label,
.frb input[type="checkbox"]:checked ~ label {
	background-color: #f2f2f2;
}

.frb.frb-default input[type="radio"]:checked ~ label,
.frb.frb-default input[type="checkbox"]:checked ~ label {
	color: #333;
}

.frb.frb-primary input[type="radio"]:checked ~ label,
.frb.frb-primary input[type="checkbox"]:checked ~ label {
	background-color: #337ab7;
}

.frb.frb-success input[type="radio"]:checked ~ label,
.frb.frb-success input[type="checkbox"]:checked ~ label {
	background-color: #5cb85c;
}

.frb.frb-info input[type="radio"]:checked ~ label,
.frb.frb-info input[type="checkbox"]:checked ~ label {
	background-color: #5bc0de;
}

.frb.frb-warning input[type="radio"]:checked ~ label,
.frb.frb-warning input[type="checkbox"]:checked ~ label {
	background-color: #f0ad4e;
}

.frb.frb-danger input[type="radio"]:checked ~ label,
.frb.frb-danger input[type="checkbox"]:checked ~ label {
	background-color: #d9534f;
}

.frb input[type="radio"]:empty ~ label span,
.frb input[type="checkbox"]:empty ~ label span {
	display: inline-block;
}

.frb input[type="radio"]:empty ~ label span.frb-title,
.frb input[type="checkbox"]:empty ~ label span.frb-title {
	font-size: 16px;
	font-weight: 700;
	margin: 5px 5px 5px 50px;

}

.frb input[type="radio"]:empty ~ label span.frb-description,
.frb input[type="checkbox"]:empty ~ label span.frb-description {
	font-weight: normal;
	font-style: italic;
	color: #999;
	margin: 5px 5px 5px 50px;
	
}

.frb input[type="radio"]:empty:checked ~ label span.frb-description,
.frb input[type="checkbox"]:empty:checked ~ label span.frb-description {
	color: #fafafa;
}

.frb.frb-default input[type="radio"]:empty:checked ~ label span.frb-description,
.frb.frb-default input[type="checkbox"]:empty:checked ~ label span.frb-description {
	color: #999;
}
	</style>
	<!-- radio end -->
<?php echo $header;?>
<body>

<section style=" color:#fff;padding:1px 1px;">
<p>&nbsp;</p>
<div class="container-fluid ">
		<div class="container">
		<div class="row aboutarea">
			<div class="col-lg-2">
			<div class="btn-group" id="myDropdown">
			<nav style="">
			<a href="<?php echo ($home['link']) ? $home['link'] : '';?>"><?php echo ($home['text']) ? $home['text'] : '';?>   &nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
			  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					CLEANING 
				<span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu">
			  	<?php 
					if(isset($categories) && count($categories) > 0) { 
						foreach($categories as $category) { ?>
							<li><a href="<?php echo base_url();?><?php echo ($category->slug) ? $category->slug : '';?>"><?php echo ($category->name) ? $category->name : '';?></a></li>
					<?php } ?>
					<?php } ?>
				<!--<li class="divider"></li>
				<li><a href="#">Choice..</a></li>-->
			  </ul>
			  </nav>
			 
			</div>
			
			</div>
			<!-- <div class="col-lg-2">
			
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
			</div> -->
			
		</div>
	</div>
</div>
</section>
<div class="container-fluid ">
		<div class="container">
		<div class="row ">
		<div class="col-lg-6">
			<img src="<?php echo base_url();?>assets/cityook/images/florida-plumber.jpg" class="img-responsive"/>
			</div>
			<div class="col-lg-6">
			<h1 class="webabouth" style=""><?php echo ($heading) ? $heading : '';?></h1>
			<p class="webaboutp" style=""><?php echo ($description) ? $description : '';?></p>
			</div>
			
		</div>
		<p>&nbsp;</p>
		<!-- service-->
		<div class="row">
		    <fieldset class="col-md-12">    	
					<legend align="center">Select the Services</legend>
					    <div class="col-xs-12 col-sm-6 col-md-12">
				<!-- <h3 class="text-center">Radio Button</h3> -->
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
					<?php 
					if(isset($services) && count($services) > 0) { 
						foreach($services as $service) { ?>
					<div class="frb frb-info" id="slugs">
						<input type="radio" class="slug" id="radio-button-<?php echo ($service->slug) ? $service->slug : ''?>" name="radio-button" value="<?php echo ($service->slug) ? $service->slug : ''?>">
						<label for="radio-button-<?php echo ($service->slug) ? $service->slug : ''?>">
							<span class="frb-title"><?php echo ($service->name) ? $service->name : ''?></span>
								<p><span class="frb-description"><?php echo ($service->description) ? $service->description : ''?></span>	</p>
						</label>
					</div>
				<?php } ?> 
				<?php } else { ?>
					<div class="frb frb-info" id="slugs">
						
						<label for="radio-button">
							
								<p><span class="frb-description">No Service Available</span>	</p>
						</label>
					</div>
				<?php } ?>
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
					    <div class="col-lg-2">	<img src="<?php echo base_url();?>assets/cityook/images/services/28home.png" class="img-responsive" width="80" height="30"/></div>
					     <div class="col-lg-10">
					         <span>home</span>
					         <p>A healthy home is a happy home. Our cleaning solutions are specifically designed so that every nook and corner of your home shines like new!</p>
					    </div>
					</div>
					
						<div class="row serviceitem">
					    <div class="col-lg-2">	<img src="<?php echo base_url();?>assets/cityook/images/services/28home.png" class="img-responsive" width="80" height="30"/></div>
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



		
</body>

<?php echo $footer;?>

<?php echo $script;?>
<script>
	$(document).ready(function(){
		var base_url = '<?php echo base_url();?>';
		$(".slug") // select the radio by its id
    .change(function(){ // bind a function to the change event
        if( $(this).is(":checked") ){ // check if the radio is checked
            var val = $(this).val(); // retrieve the value
            window.location.href = base_url + "<?php echo ($this->uri->segment(1)) ? $this->uri->segment(1) : '';?>/"+ val;
        }
    });
	    
	});
</script>