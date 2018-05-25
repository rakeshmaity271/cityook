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
                
                <img src="assets/cityook/images/register3.png" class="logimg"/>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="card">
                    <article class="card-body">
                        <h4 class="card-title mb-4 mt-1 signh4" style="" style="text-align:center;">Register New User</h4>
                        <form method="post" role="form" id="contact-form" >

                            <div id="first">
                               
							<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Mobile Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon">+91</span>
									<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter your Mobile" required="required" data-error="Code is required."/>
								</div>
							</div>
							</div>
                           <!-- <div class="form-group">
                                <input name="code" id="code" class="form-control" placeholder="91" type="text" required="required" data-error="Code is required.">
                                <div class="help-block with-errors"></div>
                            </div> 
                            <div class="form-group">
                                <input name="phone" id="phone" type="text"  class="form-control" placeholder="xxxx-xxx-xxx"  required="required" data-error="Phone is required.">
                                <div class="help-block with-errors"></div>
                            </div> -->
                            <div class="form-group">
                                <button data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order" type="submit" id="registerButton" class="btn btn-primary btn-block" name="login">Send Otp</button>
                            </div>
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
            //console.log($('#contact-form').serialize());
            var url = "<?php echo base_url();?>register/sendOtp";

            // POST values in the background the the script URL
           // var mobile = $('#phone').val();
            //console.log(mobile);
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": url,
              "data" : $('#contact-form').serialize(),
              "method": "POST",
              "headers": {
                
              }
            }

            $.ajax(settings).done(function (data) {
              console.log(data);
              if(data.error === false) {
                swal("Verification code successfully send your mobile")
                    .then((value) => {
                        window.location.href = 'http://localhost/cityook/register/step-2';
                    });
              } 
              return false;
              
            });
            return false;
        }
    });
    
});

</script>
