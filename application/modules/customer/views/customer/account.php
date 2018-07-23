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
<div class="maincontentarea" style="padding:50px 10px;">

</div>

<div class="container ">

    <div class="row">	   <div class="col-lg-9">	   <h2>My Account</h2>          <div class="col-lg-4">                        <div class="card"><article class="card-body">	 <form method="post" role="form" id="contact-form">     <div class="form-group">        <input name="firstname" id="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." type="text">        <div class="help-block with-errors"></div>    </div>    <div class="form-group">        <input name="lastname" id="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Last Name is required." type="text">        <div class="help-block with-errors"></div>    </div>    <div class="form-group">        <input name="email" id="email" class="form-control" placeholder="example@mail.com" type="text" data-error="Bruh, that email address is invalid" required>        <div class="help-block with-errors"></div>    </div>     <div class="form-group">        <input class="form-control" id="password" name="password" placeholder="******" type="password" required="required" data-error="Password is required.">        <div class="help-block with-errors"></div>    </div>     <div class="form-group">        <input name="otp" id="otp" class="form-control" placeholder="Please enter your OTP *" required="required" data-error="Otp is required." type="text">        <div class="help-block with-errors"></div>    </div>                                                             </article></div>          </div>          <div class="col-lg-1"></div>          <div class="col-lg-4"><div class="card"><article class="card-body">     <div class="form-group">        <input name="firstname" id="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." type="text">        <div class="help-block with-errors"></div>    </div>    <div class="form-group">        <input name="lastname" id="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Last Name is required." type="text">        <div class="help-block with-errors"></div>    </div>    <div class="form-group">        <input name="email" id="email" class="form-control" placeholder="example@mail.com" type="text" data-error="Bruh, that email address is invalid" required>        <div class="help-block with-errors"></div>    </div>     <div class="form-group">        <input class="form-control" id="password" name="password" placeholder="******" type="password" required="required" data-error="Password is required.">        <div class="help-block with-errors"></div>    </div>     <div class="form-group">        <input name="otp" id="otp" class="form-control" placeholder="Please enter your OTP *" required="required" data-error="Otp is required." type="text">        <div class="help-block with-errors"></div>    </div>          <div class="form-group">        <button type="submit" class="btn btn-primary btn-block" name="login">Save</button>    </div> <!-- form-group// -->                                                           </form></article></div> <!-- col.// --></div>	   	   	   </div>	     <div class="col-lg-3 rightsidebar"> 		 <!---sidebar start here--> <div class="sidebar-account block">            <div class="sidebar-bar-title">              <h3>My Account</h3>            </div>            <div class="block-content">              <ul>                              <li class="current"><a href="<?php echo base_url();?>my-account">My Account</a></li>               <!-- <li><a href="#">Address Books</a></li>-->                <li><a href="#">Order History</a></li>                <li><a href="#">Change Password</a></li>                <li><a href="<?php echo base_url();?>logout">Logout</a></li>              </ul>            </div>          </div> <!--- sidebar end here-->		 		 </div>	 
        
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

</script><style>.rightsidebar{padding:0px 20px;}.sidebar .block {    margin-bottom: 20px;}.sidebar-bar-title {    color: #333333;    margin: auto;    font-size: 14px;    font-weight: 600;    border-bottom: 1px solid #e5e5e5;}.sidebar-bar-title h3 {    font-size: 14px;    letter-spacing: 0.5px;    border-bottom: 2px solid #e83f33;    display: inline-block;    margin-bottom: -1px;    padding-bottom: 8px;    font-weight: 600;}.block .block-content {    font-size: 12px;    overflow: hidden;    padding: 0px 0px;}.sidebar-account .block-content ul {       margin-bottom: 5px;}.sidebar ul, .sidebar ol {    margin: 0px;    padding: 0px;}.sidebar-account .block-content li.current {    font-weight: 600;    color: #e83f33;}.sidebar-account .block-content li:first-child {    border-top: none;}.sidebar-account .block-content li {    padding: 10px 0px;    border-top: 1px #fff solid;    border-bottom: 1px #e8e8e8 solid;	list-style-type: none;}.sidebar li {    list-style: none;}.sidebar-account .block-content li a {    cursor: pointer;    padding: 0 12px;    transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;}.sidebar-account .block-content li:before {    content: "\f105";    font-family: FontAwesome;    font-size: 10px;    display: inline-block;    position: absolute;    cursor: pointer;    line-height: 16px;    color: #333333;	list-style-type:none;}.block-content ul{padding:0px 0px 0px 0px !important;}</style>