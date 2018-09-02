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
<div class="maincontentarea" style="padding:68px 0px 0px 0px">
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="<?php echo base_url();?>">Home</a><span>&nbsp;<i class="fa fa-angle-right  "></i></span></li>
            <li><strong><?php echo $this->uri->segment('2'); ?></strong></li>
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
<section style=" color:#fff;padding:1px 1px;">
<p>&nbsp;</p>
<div class="container-fluid ">
		<div class="container">
		<div class="row aboutarea">
			<div class="col-lg-2">
			<div class="btn-group" id="myDropdown">
			<nav style="">
			<a href="<?php echo base_url();?>">HOME   &nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
			  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					CLEANING 
				<span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu">
					<?php 
					if(isset($categories) && count($categories) > 0) { 
						foreach($categories as $category) { ?>
							<li><a href="<?php echo base_url();?>en/<?php echo ($category->slug) ? $category->slug : '';?>"><?php echo ($category->name) ? $category->name : '';?></a></li>
					<?php } ?>
					<?php } ?>
				<!--<li class="divider"></li>
				<li><a href="#">Choice..</a></li>-->
			  </ul>
			  </nav>
			 
			</div>
			
			</div>
			<div class="col-lg-2">
			
			<div class="btn-group" id="myDropdown">
			<nav style=""> 
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					 <i class="fa fa-chevron-right"></i>&nbsp; SOFA
				<span class="caret"></span>
			    </a>
			  <ul class="dropdown-menu">
					<?php 
					if(isset($categories) && count($categories) > 0) { 
						foreach($categories as $category) { ?>
							<li><a href="<?php echo base_url();?>en/<?php echo ($category->slug) ? $category->slug : '';?>"><?php echo ($category->name) ? $category->name : '';?></a></li>
					<?php } ?>
					<?php } ?>
				
			  </ul>
			</nav>
			 
			</div>
			</div>
			
		</div>
	</div>
</div>
</section>
<div class="container-fluid ">
		<div class="container">
		<div class="row ">
		<div class="col-lg-6">
			<img src="<?php echo (isset($category_cms['image'])) ? $category_cms['image'] : ''?>" class="img-responsive" height="298" width="500"/>
			</div>
			<div class="col-lg-6 categoryconp">
			<h1 class="webabouth" style=""><?php echo (isset($category_cms['heading'])) ? $category_cms['heading'] : ''?></h1>
			<?php echo (isset($category_cms['content'])) ? $category_cms['content'] : ''?>
			</div>
		
		</div>
		<div class="row" style="padding:30px 20px;">
		<div class="col-lg-12 ">
		<p class="webaboutp">
			<?php echo (isset($category_cms['middle_section_heading'])) ? $category_cms['middle_section_heading'] : ''?>
		</p>	
		</div>
		</div>
		<p>&nbsp;</p>
		<!-- service-->
		<style>
		.categoryconp p {
    text-align: justify;
    font-size: 16px;
    font-family: ro;
    line-height: 29px;
    color: #666666;
}
		.categeroys > div > div {
   /* padding: 25px 54px;*/
   text-align:center;
    border: 1px solid transparent;
    border-radius: 50%;
    transition: 0.2s;
	    padding: 21px 35px;
		}
		.categeroys > div:hover > div {
   /* margin-top: 1px;*/
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
    background: rgba(200, 200, 200, 0.1);
    transition: 0.5s;
}
.catp{
text-align:center;
font-weight:bold;
font-size:16px;
}
.simg{
width:50px;
height:50px;
}
.categorycon2
{
text-align:justify;
padding:20px 20px;
font-size:16px;

}
fieldset{
   border: 2px solid #FFD650;
}
		</style>
		<div class="row">
		    <fieldset class="col-md-12 fieldsetcat" style=" ">    	
					<legend align="center">Select the Services</legend>
					    <div class="col-xs-12 col-sm-6 col-md-12">
							<!-- start services -->
			<div class="row categeroys">
				<?php if(isset($services) && count($services) > 0) { ?>
					<?php foreach ($services as $service) { ?>
					<!-- <div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" style="text-align:center;"class="img-circle simg" width="50" height="50"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Home</a></p>
						</div>
					</div>
					<div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-circle simg" width="50" height="50"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Office</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-circle simg" width="50" height="50"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Carpet</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Sofa</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Loft</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Carpet</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Bathroom</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Balcony</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Mattress</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Kitchen</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Chair</a></p>
						</div>
					</div>
					<div class="col-md-2">
			    		<div>
							<a href="<?php echo base_url();?>service/show/"><img src="uploads/painting.png" alt="" class=" img-thumbnail simg"></a>
								<p class="catp"><a href="<?php echo base_url();?>service/show/">Window</a></p>

						
						</div>
					</div> -->
					<div class="col-md-2">
			    		<div>
						<a href="<?php echo (isset($service['url'])) ? $service['url'] : '';?>"><img src="<?php echo (isset($service['image'])) ? $service['image'] : '';?>" alt="" style="text-align:center;"class="img-circle simg" width="50" height="50"></a>
								<p class="catp"><a href="<?php echo (isset($service['url'])) ? $service['url'] : '';?>"><?php echo (isset($service['service'])) ? $service['service'] : '';?></a></p>

						</div>
					</div>
					<?php }  ?> 
				<?php } else {
						echo $this->uri->segment(1).'<legend align="center">This category"s Service not available</legend>';
					} ?>
			
			</div>
							
							<!-- start services-->
						</div>
					
			</fieldset>
		</div>
		<!-- service end -->
		
			<p>&nbsp;</p>
				<p>&nbsp;</p>
		</div>
</div>



		
</body>
<?php echo $footer;?>


<?php //echo $footer;?>

<?php echo $script;?>
<script>
	$(document).ready(function(){
		console.log(123);
		if($('.slug').prop(":checked")) {
		  console.log(this.val());
		}
	    
	});

</script>