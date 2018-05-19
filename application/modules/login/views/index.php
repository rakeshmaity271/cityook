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
	 <form method="post">
    <div class="form-group">
        <input name="mobile" class="form-control" placeholder="Enter Mobile No./ Email Id" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group">
        <input class="form-control" name="password" placeholder="******************" type="password" required>
    </div> <!-- form-group// --> 
    <div class="form-group"> 
    <div class="checkbox">
      <label> <input type="checkbox"> Remember Me </label>
      	<a class="float-right" href="#">Forgot Password?</a>
    </div> <!-- checkbox .// -->
    </div> <!-- form-group// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="login"> Login  </button>
        <a type="submit" href="register" class="btn btn-primary btn-block" name=""> Register  </a>
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