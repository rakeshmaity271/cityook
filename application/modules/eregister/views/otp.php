<?php echo $head;?>
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">-->
<style>
    
    .float-right{
        
        float:right;
    }
    .card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
   /* border: 1px solid rgba(0,0,0,.125);*/
    /* border-radius: .25rem; */
}
.signh4{
    text-align:center;
}
.logimg{
    max-width:100%;
}
    
</style>
<body>
<?php echo $header;?>
<div class="maincontentarea" style="padding:50px 10px;"></div>

<div class="container ">
    <div class="row">
          <div class="col-lg-4">
              
              <img src="<?php echo base_url('assets/cityook/images/login.png');?>" class="logimg"/>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-7">

<div class="card">
<article class="card-body">


	 <form method="post" role="form" id="contact-form">
	 <div class="row">
	 <div class="col-lg-6">
    <div class="form-group">
        <input class="form-control" id="fullname" name="fullname" placeholder="Please enter your Full Name " type="password" required="required" data-error="Password is required.">
        <div class="help-block with-errors"></div>
    </div> 
	</div>
	 <div class="col-lg-6">
	<div class="form-group">
        <input class="form-control" id="email" name="email" placeholder="Please enter Email id" type="email" required="required" data-error="Password is required.">
        <div class="help-block with-errors"></div>
    </div> 
	</div>
	</div>
	<div class="row">
	<div class="form-group col-lg-6">
        <input class="form-control" id="password" name="password" placeholder="Choose Password (******)" type="password" required="required" data-error="Password is required.">
        <div class="help-block with-errors"></div>
    </div> 
	<div class="form-group col-lg-6">
        <input class="form-control" id="address" name="address" placeholder="Address" type="password" required="required" data-error="Password is required.">
        <div class="help-block with-errors"></div>
    </div> 
	</div>
	<div class="row">
	<div class="form-group col-lg-6">
        <input class="form-control" id="city" name="city" placeholder="City" type="password" required="required" data-error="Password is required.">
        <div class="help-block with-errors"></div>
    </div> 
	<div class="form-group col-lg-6">
        <input class="form-control" id="state" name="state" placeholder="State" type="password" required="required" data-error="Password is required.">
        <div class="help-block with-errors"></div>
    </div> 
	</div>
	<div class="row">
	<div class="form-group col-lg-6">
        <input class="form-control" id="pincode" name="pincode" placeholder="Pincode" type="password" required="required" data-error="Password is required.">
        <div class="help-block with-errors"></div>
    </div> 
	<div class="form-group col-lg-6">
        <input class="form-control" id="adharno" name="adharno" placeholder="Adhar No" type="password" required="required" data-error="Password is required.">
        <div class="help-block with-errors"></div>
    </div> 
	</div>
	<div class="row">
	<div class="form-group col-lg-6">
        <label><strong>Upload Document(Adhar/Voter/Pan Card)</strong></label>
        <div class="help-block with-errors"></div>
    </div> 
	<div class="form-group col-lg-6">
        <input class="form-control" id="file" name="file" placeholder="State" type="File" required="required" data-error="Password is required.">
        <div class="help-block with-errors"></div>
    </div> 
	</div>
    <div class="form-group">
        <input name="otp" id="otp" class="form-control" placeholder="Please enter OTP *" required="required" data-error="Otp is required." type="text">
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label><!-- <input type="checkbox" id="remember_me" name="remember_me"> --><b>Note: Wait For 1 minute to receive the OTP </b></label>
            <a class="float-right" href="#">Resend Otp</a>
        </div> 
    </div> 
  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="login">Register</button>
    </div> <!-- form-group// -->                                                           
</form>
</article>
</div> <!-- card.// -->

 <!-- col.// --></div>
        
    </div>
    
    
    
</div>


<?php echo $footer;?>
</body>

<?php echo $script;?>
<script>
$(document).ready(function() {
    console.log( "ready!" );
    $('#contact-form').validator();
});

</script>