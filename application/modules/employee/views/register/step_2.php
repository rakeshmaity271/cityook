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





	 <form method="post" role="form" id="contact-form" enctype="multipart/form-data" accept-charset="utf-8">

	 <div class="row">

	 <div class="col-lg-6">

    <div class="form-group">

        <input class="form-control" id="fullname" name="fullname" placeholder="Please enter your Full Name " type="text" required="required" data-error="Fullname is required.">

        <div class="help-block with-errors"></div>

    </div> 

	</div>

	 <div class="col-lg-6">

	<div class="form-group">

        <input class="form-control" id="email" name="email" placeholder="Please enter Email id" type="email" required="required" data-error="Email is required.">

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

        <input class="form-control" id="address" name="address" placeholder="Address" type="text" required="required" data-error="Address is required.">

        <div class="help-block with-errors"></div>

    </div> 

	</div>

	<div class="row">

	<div class="form-group col-lg-6">

        <input class="form-control" id="city" name="city" placeholder="City" type="text" required="required" data-error="City is required.">

        <div class="help-block with-errors"></div>

    </div> 

	<div class="form-group col-lg-6">

        <input class="form-control" id="state" name="state" placeholder="State" type="text" required="required" data-error="State is required.">

        <div class="help-block with-errors"></div>

    </div> 

	</div>

	<div class="row">

	<div class="form-group col-lg-6">

        <input class="form-control" id="pincode" name="pincode" placeholder="Pincode" type="text" required="required" data-error="Pincode is required.">

        <div class="help-block with-errors"></div>

    </div> 

	<div class="form-group col-lg-6">

        <input class="form-control" id="adhar_no" name="adhar_no" placeholder="Adhar No" type="text" required="required" data-error="Adhar Number is required.">

        <div class="help-block with-errors"></div>

    </div> 

	</div>

	<div class="row">

	<div class="form-group col-lg-6">

        <label><strong>Upload Document(Adhar/Voter/Pan Card)</strong></label>

        <div class="help-block with-errors"></div>

    </div> 

	<div class="form-group col-lg-6">

        <input class="form-control" id="file" name="file" placeholder="" type="file" required="required" data-error="File is required.">

        <!-- <div class="help-block with-errors"></div> -->

    </div>
        </div>
         <div class="row">

             <div class="form-group col-lg-6">

                 <label><strong>Upload Profile Picture</strong></label>

                 <div class="help-block with-errors"></div>

             </div>
             <div class="form-group col-lg-6">

            <input class="form-control" id="profilePicture" name="profilePicture" placeholder="" type="file" required="required" data-error="File is required.">

             <div class="help-block with-errors"></div>

        </div>
         </div>

        <div class="form-group">

        <input name="mobile" value="<?php echo ($this->session->userdata('register')['mobile']) ? $this->session->userdata('register')['mobile'] : '';?>" id="mobile" class="form-control" placeholder="Please enter mobile *" required="required" data-error="Mobile is required." type="text">

        <div class="help-block with-errors"></div>

    </div>
    <div class="form-group">

        <input name="verificationCode" id="verificationCode" class="form-control" placeholder="Please enter verification code *" required="required" data-error="Verification code is required." type="text">

        <div class="help-block with-errors"></div>

    </div>

    <div class="form-group">

        <div class="checkbox">

            <label><!-- <input type="checkbox" id="remember_me" name="remember_me"> --><b>Note: Wait For 1 minute to receive the OTP </b></label>

            <a class="float-right" href="<?php echo base_url();?>register">Resend Otp</a>

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

    $('#contact-form').on('submit', function (e) {

        // if the validator does not prevent form submit

        if (!e.isDefaultPrevented()) {

            //console.log($('#contact-form').serialize());

            var url = "<?php echo base_url();?>/employee/register/submit";



            // POST values in the background the the script URL

           // var mobile = $('#phone').val();

            //console.log(mobile);
            
            var settings = {

              "async": true,

              "crossDomain": true,

              "url": url,

              "data" : new FormData(this),
              "processData": false,
              "contentType": false,
              'cache' : false,

              "method": "POST",

              "headers": {
              },
              beforeSend: function() {
                // Show full page LoadingOverlay
                $.LoadingOverlay("show");
            }

            }



            $.ajax(settings).done(function (data) {

                console.log(data);

              if(data.error === false && data.type === 'success') {

                setTimeout(function() {
                    $.LoadingOverlay("hide");
                    swal({

                    title: "success",

                    text: data.message,

                    icon: "success",
                    buttons: true,

                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = '<?php echo base_url("/login");?>';
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
                   
                }, 3000);

              } else if(data.error === true && data.type === 'expired') {

                setTimeout(function() {
                    $.LoadingOverlay("hide");
                    swal({

                    title: "Expired",

                    text: data.message,

                    icon: "Error",
                    buttons: true,

                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = '<?php echo base_url("/employee/register");?>';
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
                   
                }, 3000);

              } else {

                if(data.error === true && data.type === 'error') {

                    setTimeout(function() {
                    $.LoadingOverlay("hide");
                    swal({

                    title: "Error",

                    text: data.message,

                    icon: "error",
                    });
                   
                }, 3000);
                   
                    return false;

                }

              }

            });

            return false;

        }

    });

});



</script>