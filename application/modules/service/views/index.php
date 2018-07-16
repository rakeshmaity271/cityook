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
			<div class="col-lg-2">
			
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
			</div>
			
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
		<div class="row" style="padding:30px 20px;">
		<div class="col-lg-12">
		<p class="webaboutp">Cleaning Services in Patna You Can Rely on The one-Stop Shop for all home and office cleaning Services.
Sofa,Home,Office,Loft,Carpet,Bathroom,Balcony,Mattress,kitchen,Chair,Window,Fridge.</p>	
		</div>
		</div>
		<p>&nbsp;</p>
		<!-- service-->
		<style>
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
				
					<div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" style="text-align:center;"class="img-circle simg" width="50" height="50"></a>
								<p class="catp"><a href="">Home</a></p>
						</div>
					</div>
					<div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-circle simg" width="50" height="50"></a>
								<p class="catp"><a href="">Office</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-circle simg" width="50" height="50"></a>
								<p class="catp"><a href="">Carpet</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="">Sofa</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="">Loft</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="">Carpet</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="">Bathroom</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="">Balcony</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="">Mattress</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="">Kitchen</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-circle simg"></a>
								<p class="catp"><a href="">Chair</a></p>
						</div>
					</div><div class="col-md-2">
			    		<div>
							<a href="#"><img src="uploads/painting.png" alt="" class=" img-thumbnail simg"></a>
								<p class="catp"><a href="">Window</a></p>
						</div>
					</div>
			
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