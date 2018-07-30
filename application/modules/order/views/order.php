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
<div class="maincontentarea" style="padding:68px 0px 0px 0px"><div class="breadcrumbs">    <div class="container">      <div class="row">        <div class="col-xs-12">          <ul>            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&nbsp;<i class="fa fa-angle-right  "></i></span></li>            <li><strong>Order History</strong></li>          </ul>        </div>      </div>    </div>  </div>  <style>  .breadcrumbs {    padding: 7px 0px 0px 0px;    margin: auto;    font-size: 12px;    border-bottom: 1px #e5e5e5 solid;	border-top: 1px #e5e5e5 solid;}.breadcrumbs ul li {    list-style-type: none;    display: inline;}  </style>

</div>

<div class="container ">

    <div class="row">	   <div class="col-lg-9 " >	   <p>&nbsp;</p>	   <h4 style="text-align:center;">Order History</h4>		<form method="post">					<div class="row">						<div class="col-sm-12">							<div class="table-responsive">								<table class="table table-bordered table-hover">									<thead>										<tr>											<td class="text-center">Order ID</td>											<td class="text-left">Name</td>											<td class="text-center">Mobile</td>											<td class="text-center">Res Id</td>											<td class="text-center">Payment Type</td>											<td class="text-center">Schedule</td>											<td class="text-center">Address</td>											<td class="text-right">Details</td>																					</tr>									</thead>									<tbody>																																								<tr>											<td class="text-center">ORD1</td>											 <td class="text-center">Ram Kumar</td>											 <td class="text-center">900000000</td>											 <td class="text-center">05</td>											 <td class="text-center">COD</td>											 <td class="text-center">Within 1 Hour</td>											 <td class="text-center">Main Road,Patna,800001,Bihar,India</td>											 <td class="text-center"><a target="_blank" class="btn btn-info" title="" data-toggle="tooltip" href="order_id=1" data-original-title="View"><i class="fa fa-eye"></i></a>										</td>										</tr>																																							</tbody>								</table>							</div>							<br>						</div>					</div>														</form>        	   	   	   </div>	     <div class="col-lg-3 rightsidebar"> 		 <!---sidebar start here--> <div class="sidebar-account block">            <div class="sidebar-bar-title">              <h3>My Account</h3>            </div>            <div class="block-content">              <ul>                              <li class="current"><a href="<?php echo base_url();?>my-account">My Account</a></li>               <!-- <li><a href="#">Address Books</a></li>-->                <li><a href="<?php echo base_url();?>order">Order History</a></li>                <li><a href="#">Change Password</a></li>                <li><a href="<?php echo base_url();?>logout">Logout</a></li>              </ul>            </div>          </div> <!--- sidebar end here-->		 		 </div>	 
        
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