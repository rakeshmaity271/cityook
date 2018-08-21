<?php echo $head;?>
<?php echo $header;?>
<div class="maincontentarea" style="padding:68px 0px 0px 0px">
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="#">Home</a><span>&nbsp;<i class="fa fa-angle-right  "></i></span></li>
            <li><strong>Checkout</strong></li>
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

<section class="main-container col1-layout">
   <div class="main container">
      <div class="row">
         <section class="col-main col-sm-12">
            <div id="contact" class="page-content page-contact">
               <!-- Cart Section start Here -->
               <div class="text-left">
                  <div class="col-md-12">
                     <h2 style="text-align:center;"> Checkout<!--<span id="cart-items-count">
                        </span>-->
                     </h2>
                     <!-- Start Checkout page-->
	<form enctype="multipart/form-data" action="<?php echo $action;?>" class="checkout woocommerce-checkout" method="post" name="checkout">
	<div class="row">
        <div id="customer_details" class="col2-set">
            <div class="col-md-12">
                <div class="woocommerce-billing-fields">
                    <h3>Billing Details</h3>
                    <h2>&nbsp;</h2>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Full Name</label>
                                    <input value="<?php echo $billingAddress['fullname'];?>" name="billingAddress[fullname]" class="form-control" id="bfullname" placeholder="Enter Full Name" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Email</label>
                                    <input value="<?php echo $billingAddress['email'];?>" name="billingAddress[email]" class="form-control" id="bemail" placeholder="Enter Email No" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Mobile</label>
                                    <input value="<?php echo $billingAddress['mobile'];?>" name="billingAddress[mobile]" class="form-control" placeholder="Enter Mobile No" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Address</label>
                                    <textarea  name="billingAddress[address]" class="form-control" placeholder="Enter Address" required=""><?php echo $billingAddress['address'];?></textarea>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">City</label>
                                    <input value="<?php echo $billingAddress['city'];?>" name="billingAddress[city]" class="form-control" placeholder="Enter City" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Pincode</label>
                                    <input value="<?php echo $billingAddress['pincode'];?>" name="billingAddress[pincode]" class="form-control" placeholder="Enter Pincode" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">State</label>
                                    <input value="<?php echo $billingAddress['state'];?>" name="billingAddress[state]" class="form-control" placeholder="Enter State" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Country</label>
                                    <input name="billingAddress[country]" class="form-control" placeholder="Enter State" type="text" value="India" required="" readonly>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		    <div class="col-md-12">
                <h3 id="ship-to-different-address">
					<label class="checkbox" for="ship-to-different-address-checkbox">Ship to a Same as Address?</label>
					<input type="checkbox" value="1" name="ship_to_different_address" class="input-checkbox" id="ship-to-different-address-checkbox">
				</h3>
                <div class="woocommerce-billing-fields" id="woocommerce-billing-fields" style="display:none;">
                    <h3>Shipping Details</h3>
                    <h2>&nbsp;</h2>
                        <div class="row">
                        <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Full Name</label>
                                    <input value="<?php echo $billingAddress['fullname'];?>" name="shippingAddress[fullname]" class="form-control" id="bfullname" placeholder="Enter Full Name" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Email</label>
                                    <input value="<?php echo $billingAddress['email'];?>" name="shippingAddress[email]" class="form-control" id="bemail" placeholder="Enter Email No" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Mobile</label>
                                    <input value="<?php echo $billingAddress['mobile'];?>" name="shippingAddress[mobile]" class="form-control" placeholder="Enter Mobile No" type="text" required="">
                                    <span claszs="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Address</label>
                                    <textarea  name="shippingAddress[address]" class="form-control" placeholder="Enter Address" required=""><?php echo $billingAddress['address'];?></textarea>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">City</label>
                                    <input value="<?php echo $billingAddress['city'];?>" name="shippingAddress[city]" class="form-control" placeholder="Enter City" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Pincode</label>
                                    <input value="<?php echo $billingAddress['pincode'];?>" name="shippingAddress[pincode]" class="form-control" placeholder="Enter Pincode" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">State</label>
                                    <input value="<?php echo $billingAddress['state'];?>" name="shippingAddress[state]" class="form-control" placeholder="Enter State" type="text" required="">
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Country</label>
                                    <input name="shippingAddress[country]" class="form-control" placeholder="Enter State" type="text" value="India" required="" readonly>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
        </div>
	</div>
	</div>
	<div class="row">
	<h3 id="order_review_heading" style="text-align:center;">Choose Payment Method</h3>

	<div class="woocommerce-checkout-review-order" id="order_review">
		

		<div class="woocommerce-checkout-payment" id="payment">
			<ul class="wc_payment_methods payment_methods methods">
				<li class="wc_payment_method payment_method_bacs">
					<input type="radio" data-order_button_text="" checked="checked" value="cod" name="payment_method" class="input-radio" id="payment_method_bacs">
					<label for="payment_method_bacs">Cash on Delivery</label>
					<!--<div class="payment_box payment_method_bacs">
						<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won�t be shipped until the funds have cleared in our account.</p>
					</div>-->
				</li>
				<li class="wc_payment_method payment_method_paypal">
					<input type="radio" data-order_button_text="Proceed to PayPal" value="payumoney" name="payment_method" class="input-radio" id="payment_method_paypal">

					<label for="payment_method_paypal">Payumoney <a title="What is PayPal?" onclick="javascript:window.open('https://www.payumoney.com/aboutus.html','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/us/webapps/mpp/paypal-popup">What is PayPal?</a></label>
					<div style="display:none;" class="payment_box payment_method_paypal">
						<p>Pay via PayPal; you can pay with your credit card if you don�t have a PayPal account.</p>
					</div>
				</li>
			</ul>
			<div class="form-row place-order">
            <p class="form-row terms wc-terms-and-conditions">
					<input type="checkbox" id="terms" name="terms" class="input-checkbox">
			        <label class="checkbox" for="terms">I Have read and accept the <a target="_blank" href="terms-and-conditions.html">terms &amp; conditions</a> <span class="required">*</span></label>
			        <input type="hidden" value="1" name="terms-field">
			    </p>
				<input type="submit" data-value="Preview Order" value="Preview Order" class="btn btn-primary button alt">
			</div>
		</div>
	</div>
	</div>
</form>

					 
					 
					 <!-- End Check out Page -->
                  </div>
               </div>
               <!-- cart Section End Here -->
            </div>
         </section>
      </div>
   </div>
</section>
<style>
.col2-set {
    margin-left: -0.9375rem;
    margin-right: -0.9375rem;
}
.woocommerce-checkout h3 {
    font-size: 1.786em;
    line-height: 1.6em;
    display: block;
    padding-bottom: 0.400em;
    position: relative;
   /* margin-bottom: 1.360em;*/
    border-bottom: 1px solid #dadada;
}
.form-row.form-row-first {
    padding-right: 15px;
    clear: left;
}
.form-row {
    padding-left: 0;
    padding-right: 0;
}
.form-row {
    position: relative;
    float: left;
    min-height: 1px;
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    width: 100%;
    margin-bottom: 1.714em;
}
#ship-to-different-address label {
    display: inline-block;
}
.checkbox, .radio {
    position: relative;
    display: block;
    margin-bottom: .75rem;
}
label {
    font-size: 1em;
    line-height: 1.286em;
    font-weight: bold;
    margin-bottom: 0.857em;
}
.create-account .checkbox {
    display: inline-block;
    margin-left: 0.25em;
}
.checkbox, .radio {
    position: relative;
    display: block;
    margin-bottom: .75rem;
}
label {
    font-size: 1em;
    line-height: 1.286em;
    font-weight: bold;
    margin-bottom: 0.857em;
}
.woocommerce-checkout h3 {
    font-size: 1.786em;
    line-height: 1.6em;
    display: block;
    padding-bottom: 0.400em;
    position: relative;
   /* margin-bottom: 1.360em;*/
    border-bottom: 1px solid #dadada;
}
#payment {
    border-top: 3px solid #ddd;
}
.woocommerce-checkout-review-order-table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1.236rem;
}
#payment .payment_methods {
    margin: 0 !important;
    border-bottom: 1px dotted #ddd;
    padding: 0 !important;
}
#payment .payment_methods li {
    list-style: none !important;
    padding: 1.387em !important;
    border-bottom: 1px dotted #ddd;
    margin-left: 0;
}
#payment .payment_methods li label {
    width: 92%;
    padding-top: 0 !important;
    margin-left: .618em;
    font-weight: bold;
    margin-bottom: 0;
}
#payment .payment_methods li .payment_box {
    padding: 1.387em;
    margin: 1.387em -1.387em -1.387em -1.387em;
    background: rgba(0, 0, 0, 0.035);
    border-top: 1px dotted #ddd;
}
#payment .payment_methods li p {
    margin: 0;
}
#payment .place-order {
    padding: 1.387em;
    margin-bottom: 0;
    float: none;
    width: 100%;
}
#payment .terms {
    width: 100%;
    clear: both;
    float: none;
    margin-bottom: 0;
    margin-bottom: 1em;
}
#payment .terms input {
    display: inline-block;
    width: auto;
    float: left;
    margin: .327em .53em 0 0;
}
#payment .terms label {
    display: inline-block;
    margin-left: .618em;
}
#payment .terms input {
    display: inline-block;
    width: auto;
    float: left;
    margin: .327em .53em 0 0;
}
#payment .place-order .button {
    font-size: 1.387em;
    width: 100%;
    white-space: pre-wrap;
	color: #333e48;
    background-color: #FED700;
    border-color: #FED700;
	    border-radius: 1.571em;
	
}
.woocommerce-checkout-review-order-table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1.236rem;
}
.woocommerce-checkout-review-order-table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #eceeef;
}
.woocommerce-checkout-review-order-table th, .woocommerce-checkout-review-order-table td {
    padding: 0.75rem;
    line-height: 1.5;
    vertical-align: top;
    border-top: 1px solid #eceeef;
}
</style>
  <?php echo $footer;?>
<?php echo $script;?>
  <script type="text/javascript">  
  $(document).ready(function() {
    
      $('#ship-to-different-address-checkbox').change(function() {
        if(this.checked)
            $('#woocommerce-billing-fields').show();
        else
            $('#woocommerce-billing-fields').hide();
      });
  });
</script>

  <style>
  /* just for preview */
.container {
    /* padding-top: 40px; */  
}

@media ( max-width: 585px ) {
    .input-group span.input-group-btn,.input-group input,.input-group button{
        display: block;
        width: 100%;
        border-radius: 0;
        margin: 0;
    }
    .input-group {
        position: relative;   
    }
    .input-group span.data-up{
        position: absolute;
        top: 0;
    }
    .input-group span.data-dwn{
        position: absolute;
        bottom: 0;
    }
    .form-control.text-center {
        margin: 34px 0;
    }
    .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group{
        margin-left:0;
    }

}
  </style>
  
  <!-- <script>
  $(function() {
    var action;
    $(".number-spinner button").mousedown(function () {
        btn = $(this);
        input = btn.closest('.number-spinner').find('input');
        btn.closest('.number-spinner').find('button').prop("disabled", false);

    	if (btn.attr('data-dir') == 'up') {
            action = setInterval(function(){
                if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
                    input.val(parseInt(input.val())+1);
                }else{
                    btn.prop("disabled", true);
                    clearInterval(action);
                }
            }, 50);
    	} else {
            action = setInterval(function(){
                if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
                    input.val(parseInt(input.val())-1);
                }else{
                    btn.prop("disabled", true);
                    clearInterval(action);
                }
            }, 50);
    	}
    }).mouseup(function(){
        clearInterval(action);
    });
});
  </script> -->