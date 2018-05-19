<style>
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section{
	padding: 60px 0;
}
section .section-title{
	text-align:center;
	color:#007b5e;
	margin-bottom:50px;
	text-transform:uppercase;
}
#what-we-do{
	background:#ffffff;
}
#what-we-do .card{
	padding: 1rem!important;
	border: none;
	margin-bottom:1rem;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#what-we-do .card:hover{
	-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
#what-we-do .card .card-block{
	padding-left: 50px;
    position: relative;
}
#what-we-do .card .card-block a{
	color: #007b5e !important;
	font-weight:700;
	text-decoration:none;
}
#what-we-do .card .card-block a i{
	display:none;
	
}
#what-we-do .card:hover .card-block a i{
	display:inline-block;
	font-weight:700;
	
}
#what-we-do .card .card-block:before{
	font-family: FontAwesome;
    position: absolute;
    font-size: 39px;
    color: #007b5e;
    left: 0;
	-webkit-transition: -webkit-transform .2s ease-in-out;
    transition:transform .2s ease-in-out;
}
#what-we-do .card .block-1:before{
    content: "\f0e7";
}
#what-we-do .card .block-2:before{
    content: "\f0eb";
}
#what-we-do .card .block-3:before{
    content: "\f00c";
}
#what-we-do .card .block-4:before{
    content: "\f209";
}
#what-we-do .card .block-5:before{
    content: "\f0a1";
}
#what-we-do .card .block-6:before{
    content: "\f218";
}
#what-we-do .card:hover .card-block:before{
	-webkit-transform: rotate(360deg);
	transform: rotate(360deg);	
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
	</style>

<script type="text/javascript">
    $(document).ready(function () {
        $("#owl-banner").owlCarousel({
            singleItem: true,
            autoPlay: true,
            navigation: false
        });
        $("#owl-testmonials").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true,
            loop: true,
            stopOnHover: true
        });
        $("#serviceTestimonials").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true,
            stopOnHover: true
        });

        $("#owl-offer").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true,
            stopOnHover: true
        });

        $.material.init();
        customStyles();

        // hide testimonial section if no testimonials available
        if($("#owl-testmonials .item").size() == 0){
            $(".customerSays").hide();
        }
        if($("#blog .item").size() == 0){
            $(".blog").hide();
        }
        else{

        }
        $("#blog .owl-prev").hide();

		if(getCookie("selectionPopupShown") == "true")
		{
			clevertap.notifications.push({
				"titleText": 'Stay up to date with order updates, special offers and discounts!',
				"bodyText": 'Exclusive and tailored content, delivered right to your browser.',
				"okButtonText":'Sign Me Up!',
				"rejectButtonText":'No thanks',
				"okButtonColor":'#f28046'
			});
		}
    });
    // recommendation engine
    var owl = $("#recommendedServices");

    $('#recommendedServices').owlCarousel({
        loop: true,
        margin: 10,
        navigation: true,
        autoplay: true,
        responsive: true,
        items: 4,
        afterMove: function (owl) {
            data = $(owl).data('owlCarousel');
            isLast = data.currentItem + data.visibleItems.length == data.itemsAmount;
            isFirst = data.currentItem == 0;
            if (isLast) { //returns true when reaches the last
                //do stuffs
                $("#recommendedServices .owl-next").hide();
                $("#recommendedServices .owl-prev").show();
            }
            else if (isFirst) {
                $("#recommendedServices .owl-prev").hide();
                $("#recommendedServices .owl-next").show();
            }
            else {
                $("#recommendedServices .owl-next").show();
                $("#recommendedServices .owl-prev").show();
            }
        },
        afterInit: function (owl) {
            if ($("#recommendedServices .owl-wrapper").width() > $("#recommendedServices .owl-wrapper-outer").width()) {
                $("#recommendedServices .owl-next").show();
            }
            var slider_width = 0;
            $("#recommendedServices .owl-item").each(function () {
                slider_width += $(this).width();
            })
            if (slider_width < $("#recommendedServices .owl-wrapper-outer").width()) {
                $("#recommendedServices .owl-next").hide();
            }
        }

    })

     $('#blog').owlCarousel({
        loop: true,
        margin: 10,
        navigation: true,
        autoplay: true,
        responsive: true,
        items: 4,
        afterMove: function (owl) {
            data = $(owl).data('owlCarousel');
            isLast = data.currentItem + data.visibleItems.length == data.itemsAmount;
            isFirst = data.currentItem == 0;
            if (isLast) { //returns true when reaches the last
                //do stuffs
                $("#blog .owl-next").hide();
                $("#blog .owl-prev").show();
            }
            else if (isFirst) {
                $("#blog .owl-prev").hide();
                $("#blog .owl-next").show();
            }
            else {
                $("#blog .owl-next").show();
                $("#blog .owl-prev").show();
            }
        },
        afterInit: function (owl) {
            if ($("#blog .owl-wrapper").width() > $("#blog .owl-wrapper-outer").width()) {
                $("#blog .owl-next").show();
            }
            var slider_width = 0;
            $("#blog .owl-item").each(function () {
                slider_width += $(this).width();
            })
            if (slider_width < $("#blog .owl-wrapper-outer").width()) {
                $("#blog .owl-next").hide();
            }

            var itemHeight = [];
        	$("#blog .item").size();
        	$("#blog .item").each(function(){
        		itemHeight.push($(this).children(".card").height());
        	})

	        var arrayLength = itemHeight.length;
		    var currentItem = itemHeight[0];
		    var nextItem ="";
		    var maxItemHeight = "";
	        for (var i = 1; i + 1 < arrayLength; i++) {
	        	nextItem = itemHeight[i];
	        	if(nextItem > currentItem){
	        		maxItemHeight = nextItem;
	        		nextItem = itemHeight[i+1];

	        	}
	        	else if(currentItem > nextItem){
	        		maxItemHeight = currentItem;
	        		currentItem = itemHeight[i];
	        		nextItem = itemHeight[i+1];
	        	}
	        	else{
	        		maxItemHeight = nextItem;
	        		nextItem = itemHeight[i+1];
	        	}

			    //Do something
			}
        	$("#blog .item .card").css("height",maxItemHeight+"px");
        }

    })

    // recommendation engine end

    $(window).resize(function () {
        customStyles();
    });

    function customStyles() {
        if ($(window).width() <= 420) {
            ($(".hideName").toggleClass("hidden-xs"));
        }
    }

    $(document).scroll(function () {
        if($(window).scrollTop() >= 90) {
            $("#header.navbar").css({
                'background-color': '#fff',
                'box-shadow': '0 1px 3px #bcbcbc'
            });



        } else {
            $("#header.navbar").css({
                'background-color': '#f1f1f3',
                'box-shadow': 'none'
            });

        }
    });

	//CleverTap events
	$(".citySelectionPopup").on("click", function()
	{
		clevertap.event.push("Visited Screen", {
		  "Screen Name": "City Selection",
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});

		clevertap.event.push("City Selection", {
		  "Location Interaction": "Popup",
		  "City ID Selected": $(this).attr("data-cityID"),
		  "City Name Selected": $(this).attr("data-cityName"),
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".citySelectionTopMenu").on("click", function()
	{
		clevertap.event.push("City Selection", {
		  "Location Interaction": "Top Menu",
		  "City ID Selected": $(this).attr("data-cityID"),
		  "City Name Selected": $(this).attr("data-cityName"),
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".footerLinksCities").on("click", function()
	{
		clevertap.event.push("City Selection", {
		  "Location Interaction": "Footer",
		  "City ID Selected": $(this).attr("data-cityID"),
		  "City Name Selected": $(this).attr("data-cityName"),
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".callButtonHelplineHeader").on("click", function()
	{
		clevertap.event.push("Call Button Clicked", {
		  "Call To": "Timesaverz - Top Menu",
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".callButtonHelplineFooter").on("click", function()
	{
		clevertap.event.push("Call Button Clicked", {
		  "Call To": "Timesaverz - Footer",
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".buttonLogout").on("click", function()
	{
		clevertap.event.push("Button Clicked", {
		  "Button Name": "Logout",
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".buttonViewRateCard").on("click", function()
	{
		clevertap.event.push("Viewed Rate Card", {
		  "Service Name": $("#serviceName").val(),
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	$(".buttonCompareServices").on("click", function()
	{
		clevertap.event.push("Visited Screen", {
		  "Screen Name": "Comparison Selection",
		  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
		});
	});

	function updateUserCleverTapProfile(customerName, customerID, customerEmailAddress, customerMobileNumber, customerGender, customerMarried, customerDOB, customerMinutes)
	{
		customerMobileNumber = "+91" + customerMobileNumber;
		customerMarried = !customerMarried ? "N" : "Y";
		customerDOB = !customerDOB ? '' : new Date(customerDOB);
		customerGender = !customerGender ? '' : customerGender.charAt(0).toUpperCase();
		var customerCityName = getCookie("timesaverzUserCityName");

		clevertap.onUserLogin.push({
			"Site": {
				"Name": customerName,
				"Identity": customerID,
				"Email": customerEmailAddress,
				"Phone": customerMobileNumber,
				"Gender": customerGender,
				"Married": customerMarried,
				"DOB": customerDOB,
				"Customer City Name": customerCityName,
				"User Minutes": customerMinutes
			}
		});
	}

</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/cityook/js/material.min-1.1.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/ripples.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/main-1.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/owl.carousel.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/jquery.dropdown.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/jquery-ui.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/bootstrap-datepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/snackbar.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/jquery.li-scroller.1.0.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/perfect-scrollbar.js');?>"></script>

<script src="<?php echo base_url('assets/cityook/js/classie.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/dialogFx.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/cartPopup-1.16.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/modalEffects.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/cityook/js/feedbackSlide.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/ouibounce.js');?>"></script>

</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="#"/>
    </div>
</noscript>
<style type="text/css">
    iframe[name='google_conversion_frame'] {
        height: 0 !important;
        width: 0 !important;
        line-height: 0 !important;
        font-size: 0 !important;
        margin-top: -13px;
        float: left;
    }
</style>
<script src="<?php echo base_url('assets/cityook/js/serviceMenu-1.3.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/animateFunction-1.6.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/validator.js');?>"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script> -->
	</body>
</html>
