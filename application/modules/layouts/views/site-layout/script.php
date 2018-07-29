<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="<?php echo base_url('assets/cityook/js/bootstrap.min.js');?>"></script>

<script src="<?php echo base_url('assets/cityook/js/material.min-1.1.js');?>"></script>

<script src="<?php echo base_url('assets/cityook/js/main-1.2.min.js');?>"></script>

<script src="<?php echo base_url('assets/cityook/js/owl.carousel.js');?>"></script>

<script src="<?php echo base_url('assets/cityook/js/jquery.li-scroller.1.0.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<!-- Scripts end -->
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.3/dist/loadingoverlay.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
    // Show full page LoadingOverlay
    //$.LoadingOverlay("show");

    // Hide it after 3 seconds
    setTimeout(function(){
        $.LoadingOverlay("hide");
    }, 3000);
        $("#owl-banner").owlCarousel({

            singleItem: true,

            autoPlay: true,

            navigation: false

        });



        $.material.init();

        customStyles();

    });

    // recommendation engine

    var owl = $("#recommendedServices");

    // recommendation engine end



    $(window).resize(function () {

        customStyles();

    });



    function customStyles() {

        if ($(window).width() <= 420) {

            ($(".hideName").toggleClass("hidden-xs"));

        }

    }

</script>



		<script type="text/javascript">

			$(function () {

				$("ul#areasServed").liScroll();

			});

		</script>

		<script src="<?php echo base_url('assets/cityook/js/serviceMenu-1.3.min.js');?>"></script>

		<script src="<?php echo base_url('assets/cityook/js/animateFunction-1.6.min.js');?>"></script>

		<script>

				$('ul.nav li.dropdown').hover(function() {

		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);

		}, function() {

		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);

		});

        </script>

        

        <script src="<?php echo base_url('assets/cityook/js/validator.js');?>"></script>

        <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       
        <script src="<?php echo base_url('assets/js/cart.js');?>"></script>
<?php 
$show = false;
if($this->uri->segment(3)) {
    $show = true;
}
?>
<?php 
if($show) { ?>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"> 
<?php } ?>

<script>
function openCart() {
    window.location.href = "<?php echo base_url();?>cart";
}

</script>
	</body>

</html>

