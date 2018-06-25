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



<h4 class="card-title mb-4 mt-1 signh4" style="" style="text-align:center;">Forgot Passoword</h4>

<?php  if(!empty($this->session->flashdata('message'))) { ?>

                    <div id="infoMessage" class="alert alert-danger mb-2" role="alert">

                      <?php echo $this->session->flashdata('message');?>

                    </div>

                  <?php } ?>

	 <form action="<?php echo base_url();?>forgot-password/send" method="post" id="contact-form">

    <div class="form-group">

        <input name="identity" class="form-control" type="text" required placeholder="Enter 10 digit mobile number" data-error="Mobile number is required.">
        <div class="help-block with-errors"></div>
    </div> <!-- form-group// -->

    

    <div class="form-group">

        <button type="submit" class="btn btn-primary btn-block" name="submit"> Send  </button>

        

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

            //console.log($('#contact-form').serialize());

            var url = "<?php echo base_url();?>forgot-password/send";



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

                    text: $(data.message).text(),

                    icon: "success",
                    buttons: true,

                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = '<?php echo base_url("/reset");?>';
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
                   
                }, 3000);

              } 
              else {

                   setTimeout(function() {
                    $.LoadingOverlay("hide");
                    swal({

                    title: "Error",

                    text: $(data.message).text(),

                    icon: "error",
                    });
                   
                }, 3000);
                return false;

              }

             

            });

            return false;

        }

    });

    

});



</script>