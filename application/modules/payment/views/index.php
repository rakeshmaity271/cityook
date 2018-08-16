<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
</head>
<body onload="submitPayuForm()">

<form action="<?php echo $action ?>" method="post" id="payu_form" name="payu_form" >
		<input type="hidden" name="key" value="<?php echo $key; ?>" />
		<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
		<input type="hidden" name="amount" value="<?php echo $amount; ?>" />
		<input type="hidden" name="productinfo" value="<?php echo $productinfo; ?>" />
		<input type="hidden" name="firstname" value="<?php echo $firstname; ?>" />
		<input type="hidden" name="lastname" value="<?php echo $lastname; ?>" />
		<input type="hidden" name="zipcode" value="<?php echo $zipcode; ?>" />
		<input type="hidden" name="email" value="<?php echo $email; ?>" />
		<input type="hidden" name="phone" value="<?php echo $phone; ?>" />
		<input type="hidden" name="surl" value="<?php echo $surl; ?>" />
		<input type="hidden" name="furl" value="<?php echo $furl; ?>" />
		<input type="hidden" name="curl" value="<?php echo $curl; ?>" />
		<input type="hidden" name="hash" value="<?php echo $hash;?>" />
		<input type="hidden" name="pg" value="<?php echo $pg; ?>" />
		<input type="hidden" name="service_provider" value="<?php echo $service_provider; ?>" />
		<input type="hidden" name="address" value="<?php echo $address; ?>" />
       
    <input type="hidden" name="city" value="<?php echo $city; ?>" />
    <input type="hidden" name="country" value="<?php echo $country; ?>" />
    <input type="hidden" name="state" value="<?php echo $state; ?>" />
    <input type="hidden" name="udf5" value="<?php echo $udf5; ?>" />
		<div class="buttons">
    <div class="pull-right"><input type="submit" value="<?php echo $button_confirm; ?>" class="btn btn-primary" /></div>
  </div>
	</form>	
</body>
</html>