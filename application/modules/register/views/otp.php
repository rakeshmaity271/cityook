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
          <div class="col-lg-6">
              
              <img src="<?php echo base_url('assets/cityook/images/login.png');?>" class="logimg"/>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5">

<div class="card">
<article class="card-body">


	 <form method="post" role="form" id="contact-form">
     <div class="form-group">
        <input name="firstname" id="firstname" class="form-control" placeholder="Please enter your Full Name *" required="required" data-error="Firstname is required." type="text">
        <div class="help-block with-errors"></div>
    </div>
   <!-- <div class="form-group">
        <input name="lastname" id="lastname" class="form-control" placeholder="Please enter Email id*" required="required" data-error="Last Name is required." type="text">
        <div class="help-block with-errors"></div>
    </div>-->
    <div class="form-group">
        <input name="email" id="email" class="form-control" placeholder="Please enter Email id*" type="text" data-error="that email address is invalid" required>
        <div class="help-block with-errors"></div>
    </div> 
    <div class="form-group">
        <input class="form-control" id="password" name="password" placeholder="Choose Password (******)" type="password" required="required" data-error="Password is required.">
        <div class="help-block with-errors"></div>
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