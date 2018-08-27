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

<div class="maincontentarea" style="padding:68px 10px;">
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="#">Home</a><span>&nbsp;<i class="fa fa-angle-right  "></i></span></li>
            <li><strong>Order</strong></li>
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



<div class="container " style="padding-bottom:70px;">
    <?php if(!empty($message)) {?>

        <h2 style="text-align:center;color:green;"><?php echo $message;?></h2>

    <?php } ?>


    <div class="row">

        <div class="col-lg-6">



            <div class="card">

                <article class="card-body">

                </article>

            </div>



            <!-- col.// --></div>



    </div>







</div>





<?php echo $footer;?>

</body>



<?php echo $script;?>
