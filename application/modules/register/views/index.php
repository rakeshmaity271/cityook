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
              
              <img src="assets/cityook/images/login.png" class="logimg"/>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5">

<div class="card">
<article class="card-body">

<h4 class="card-title mb-4 mt-1 signh4" style="" style="text-align:center;">Sign in</h4>
	 <form method="post" role="form" id="contact-form" novalidate>
     <div class="form-group">
        <input name="fullname" id="fullname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." type="text">
        <div class="help-block with-errors"></div>
    </div> <!-- form-group// -->
    <div class="form-group">
        <input name="email" id="email" class="form-control" placeholder="example@mail.com" type="text" data-error="Bruh, that email address is invalid" required>
        <div class="help-block with-errors"></div>
    </div> <!-- form-group// -->
    <div class="form-group">
        <input name="phone" id="phone" class="form-control" placeholder="Mobile" type="text" required="required" data-error="Firstname is required.">
        <div class="help-block with-errors"></div>
    </div> <!-- form-group// -->
    <div class="form-group">
        <input class="form-control" id="password" name="password" placeholder="******" type="password" required="required" data-error="Firstname is required.">
        <div class="help-block with-errors"></div>
    </div> <!-- form-group// --> 
    <div class="form-group"> 
    <div class="checkbox">
      <label> <input type="checkbox" id="remember_me" name="remember_me"> Remember Me </label>
      	<a class="float-right" href="#">Forgot Password?</a>
    </div> <!-- checkbox .// -->
    </div> <!-- form-group// -->  
    <div class="form-group">
        <button data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order" type="submit" id="registerButton" class="btn btn-primary btn-block" name="login">Register</button>
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
// when the form is submitted
    $('#contact-form').on('submit', function (e) {
        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            //var url = "contact.php";

            // POST values in the background the the script URL
            // $.ajax({
            //     type: "POST",
            //     url: url,
            //     data: $(this).serialize(),
            //     success: function (data)
            //     {
                    
            //         var messageAlert = 'alert-' + data.type;
            //         var messageText = data.message;

            //         var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                   
            //         if (messageAlert && messageText) {
            //             // inject the alert to .messages div in our form
            //             $('#contact-form').find('.messages').html(alertBox);
            //             // empty the form
            //             $('#contact-form')[0].reset();
            //         }
            //     }
            // });
            return false;
        }
    });
    
});

</script>