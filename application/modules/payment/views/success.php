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
    <?php if(!empty($text_success)) {?>

        <h1><?php echo $text_success;?></h1>

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
