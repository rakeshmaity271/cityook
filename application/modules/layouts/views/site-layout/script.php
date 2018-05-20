<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('assets/cityook/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/material.min-1.1.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/main-1.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/owl.carousel.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/jquery.li-scroller.1.0.js');?>"></script>
<!-- Scripts end -->
<script type="text/javascript">
    $(document).ready(function () {
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
	</body>
</html>
