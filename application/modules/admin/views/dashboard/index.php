<?php echo $head;?>





<!-- body content -->

<body class="vertical-layout vertical-menu 2-columns fixed-navbar pace-done menu-expanded"

data-open="click" data-menu="vertical-menu" data-col="2-columns">

<?php echo $header;?>

<?php echo $sidebar;?>

<div class="app-content content">

    <div class="content-wrapper">

      <div class="content-header row">

        <div class="content-header-left col-md-6 col-12 mb-2">

          <!-- <div class="row breadcrumbs-top">

            <div class="breadcrumb-wrapper col-12">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="index-2.html">Home</a>

                </li>

                <li class="breadcrumb-item"><a href="#">DataTables</a>

                </li>

                <li class="breadcrumb-item active">Advanced DataTable

                </li>

              </ol>

            </div>

          </div> -->

          <h3 class="content-header-title mb-0"><?php echo $title;?></h3>

        </div>

       

      </div>

      <div class="content-body">

       <!-- start here -->
       <div class="row">
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-primary bg-darken-2">
                        <i class="icon-user font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-primary white media-body">
                        <h5>Employee</h5>
                        <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> 28</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-danger bg-darken-2">
                        <i class="icon-user font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-danger white media-body">
                        <h5>Users</h5>
                        <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>1,238</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-warning bg-darken-2">
                        <i class="icon-basket-loaded font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-warning white media-body">
                        <h5>New Orders</h5>
                        <h5 class="text-bold-400 mb-0"><i class="ft-arrow-down"></i> 0</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-success bg-darken-2">
                        <i class="icon-wallet font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-success white media-body">
                        <h5>Total Profit</h5>
                        <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i> 5.6 M</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       <!-- end here-->
        

      

      

      </div>

    </div>

  </div>

  <?php echo $script;?>



<?php echo $footer;?>

<style>
  /*  
    .tile-stats .count {
    font-size: 38px;
    font-weight: bold;
    line-height: 1.65857;
}
.tile-stats .count, .tile-stats h3, .tile-stats p {
    position: relative;
    margin: 0;
    margin-left: 10px;
    z-index: 5;
    padding: 0;
}
.tile-stats .icon {
    width: 20px;
    height: 20px;
    color: #BAB8B8;
    position: absolute;
    right: 80px;
    top: 22px;
    z-index: 1;
}
.tile-stats .icon i {
    margin: 0;
    font-size: 60px;
    line-height: 0;
    vertical-align: bottom;
    padding: 0;
}*/
.bg-gradient-x-primary {
    background-image: -webkit-gradient(linear,left top,right top,from(#00A5A8),to(#4DCBCD));
    background-image: -webkit-linear-gradient(left,#00A5A8 0,#4DCBCD 100%);
    background-image: -moz-linear-gradient(left,#00A5A8 0,#4DCBCD 100%);
    background-image: -o-linear-gradient(left,#00A5A8 0,#4DCBCD 100%);
    background-image: linear-gradient(to right,#00A5A8 0,#4DCBCD 100%);
    background-repeat: repeat-x;
}
.bg-gradient-x-danger {
    background-image: -webkit-gradient(linear,left top,right top,from(#FF6275),to(#FF9EAC));
    background-image: -webkit-linear-gradient(left,#FF6275 0,#FF9EAC 100%);
    background-image: -moz-linear-gradient(left,#FF6275 0,#FF9EAC 100%);
    background-image: -o-linear-gradient(left,#FF6275 0,#FF9EAC 100%);
    background-image: linear-gradient(to right,#FF6275 0,#FF9EAC 100%);
    background-repeat: repeat-x;
}
.bg-gradient-x-warning {
    background-image: -webkit-gradient(linear,left top,right top,from(#FF976A),to(#FFC2A4));
    background-image: -webkit-linear-gradient(left,#FF976A 0,#FFC2A4 100%);
    background-image: -moz-linear-gradient(left,#FF976A 0,#FFC2A4 100%);
    background-image: -o-linear-gradient(left,#FF976A 0,#FFC2A4 100%);
    background-image: linear-gradient(to right,#FF976A 0,#FFC2A4 100%);
    background-repeat: repeat-x;
}
.bg-gradient-x-success {
    background-image: -webkit-gradient(linear,left top,right top,from(#10C888),to(#5CE0B8));
    background-image: -webkit-linear-gradient(left,#10C888 0,#5CE0B8 100%);
    background-image: -moz-linear-gradient(left,#10C888 0,#5CE0B8 100%);
    background-image: -o-linear-gradient(left,#10C888 0,#5CE0B8 100%);
    background-image: linear-gradient(to right,#10C888 0,#5CE0B8 100%);
    background-repeat: repeat-x;
}
</style>

</body>

</html>