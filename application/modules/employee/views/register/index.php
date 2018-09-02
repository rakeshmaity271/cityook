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

                        <h4 class="card-title mb-4 mt-1 signh4" style="" style="text-align:center;">Register New Employee</h4>

                        <form method="post" role="form" id="contact-form">



                            <div id="first">

                               

							<div class="form-group">

							<label for="name" class="cols-sm-2 control-label">Mobile Number</label>

							<div class="cols-sm-10">

								<div class="input-group">

									<span class="input-group-addon">+91</span>

									<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter 10 digit mobile number" required="required" data-error="Code is required."/>

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

                            <button type="submit" class="btn btn-primary btn-block" name="login">Sent Otp</button>

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



<style>
.swal-overlay {
  background-color: rgba(0, 0, 0, 0.45);
}
</style>
