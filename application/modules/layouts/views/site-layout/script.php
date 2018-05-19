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

<script src="<?php echo base_url('js/jquery-1.11.2.min1.js');?>"></script>
<script type="text/javascript">
	//Load date and time selection
	var enabledStartDate = "";
	var enabledDates = [];
	var forbiddenDates = ['01-05-2017'];
	var availableDatesAndSlots = [];
	var currentDate = "";
	var destroyDatepicker = false;

	function loadAvailableDates(categoryID)
	{
		enabledDates = [];
		enabledStartDate = "";
		availableDatesAndSlots = [];
		currentDate = "";

		$.ajax({
			url		: '/api/bookingSlotsHandler.php',
			data	: 'categoryID=' + categoryID,
			type    : 'POST',
			beforeSend: function(){
				$("#schedule-dialog .modal-content > div").css('visibility', 'hidden');
				$("#schedule-dialog .modal-content").addClass("loadingDatepicker");
				$("#datepicker").hide();

				// $("#schedule-dialog .dateLoader").show();

			},
			complete: function(){
				$("#schedule-dialog .modal-content").removeClass("loadingDatepicker");
				$("#schedule-dialog .modal-content > div").css('visibility', 'visible');
				// $("#schedule-dialog .dateLoader").hide();
				$("#datepicker").show();

			},
			success : function(response)
			{
				var data = jQuery.parseJSON(response);
				if(data.status == "successful")
				{
					availableDatesAndSlots = data.dates;

					for(var i = 0; i < data.dates.length; i++)
					{
						enabledDates.push(data.dates[i].actualDate);
					}

					//Check if datepicker has been loaded once, destroy it and reinitialize
					if(destroyDatepicker)
					{
						$('#datepicker').datepicker('update', '');
					}

					$('#datepicker').datepicker({
						format				: 'dd-mm-yyyy',
						autoclose			: false,
						disableTouchKeyboard : true,
						beforeShowDay: function (dt) {
							var y = dt.getFullYear();
							var m = ((dt.getMonth() + 1) + "").length < 2 ? ('0' + (dt.getMonth() + 1)) : (dt.getMonth() + 1);
							var d = (dt.getDate() + "").length < 2 ? ('0' + dt.getDate()) : dt.getDate();
							currentDate = y + '-' + m + '-' + d;
							if(enabledDates.indexOf(currentDate) != -1)
							{
								if(enabledStartDate == "")
								{
									enabledStartDate = d + '-' + m + '-' + y;
								}
							}

							return (enabledDates.indexOf(currentDate) != -1);
						}
					});

					//On Datepicker Loaded
					$("#enabledStartDate").val(enabledStartDate);
					$('#datepicker').datepicker('setDate', enabledStartDate);
					destroyDatepicker = true;

					var selectedDate = $("#datepicker").data('datepicker').getFormattedDate('yyyy-mm-dd');
					loadAvailableSlots(selectedDate);

					//Set default date / time selections
					$("select[name='timeFixedSlot']").each(function(){
						if($(this).hasClass("visibleTimeslotDropdown") == true)
							visibleDropdown = $(this).attr("id");
					});
					var formattedDate = $("#datepicker").data('datepicker').getFormattedDate('dd-mm-yyyy');
					var formattedTime = $("#" + visibleDropdown + " option:selected").html();

					$("#serviceDateTime").html(formattedDate + " (" + formattedTime + ")");
				}
			}
		});
	}

	function loadAvailableSlots(selectedDate)
	{
		$("#timeFixedSlot").html("");

		for(var i = 0; i < availableDatesAndSlots.length; i++)
		{
			if(availableDatesAndSlots[i].actualDate == selectedDate)
			{
				for(var j = 0; j < availableDatesAndSlots[i].slots.length; j++)
				{
					$("#timeFixedSlot").append("<option value='" + availableDatesAndSlots[i].slots[j].actualFixedTime + "'>" + availableDatesAndSlots[i].slots[j].formattedSlot + "</option>");
				}
			}
		}
	}

	$(document).ready(function() {
		//On Change Date
		$('#datepicker').on('changeDate', function () {
			var selectedDate = $("#datepicker").data('datepicker').getFormattedDate('yyyy-mm-dd');
			loadAvailableSlots(selectedDate);
		});
	});

</script>
<script type="text/javascript">
	    var paint_type = null;
	    var paintable_area = null;
	    var paint_brand = null;
	    var paint_city = null;
	    var paint_product = null;
	    var paint_rate = null;

	    $("#calculatenow").click(function () {
	        paint_type = $('input[name=painttype]:checked').val();
	        paintable_area = $("#pe-modal-paintable-area").html();
	        paint_brand = $("#paintbrand").val();
	        paint_product = $("#paintproduct").val();
	        categoryID = $("#categoryID").val();

			$.ajax
		        ({
		            type: "POST",
		            url: "/api/getPaintRate.php",
		            dataType: 'json',
		            async: true,
		            data: {
		                "categoryID":categoryID,
		                "productName":paint_product,
		                "brandName":paint_brand,
		            },
		            success: function (response) {

		            	   if(response.status=="successful"){

			                  	 paint_rate = response.paint_rate;
								  calculateRate(paint_rate);

			                }else{
			                    alert("Unable to calculate the estimate, please try again later!");
			                    $("#calculatenow").removeClass("disabled");
			                }
		            }
		        });

		    function calculateRate(paint_rate)
		    {

		        var final_price = paint_rate * paintable_area;
		        $("#calculatenow").addClass("disabled");
		        var myDate=new Date();
		        myDate.setDate(myDate.getDate()+1);
		        var dt = myDate.getFullYear() + '-' + ("0" + (myDate.getMonth() + 1)).slice(-2) + '-' + myDate.getDate();
		        var flg = 0;
		        var mobile_number = $("#pe-mobile-number").val();

		        if(mobile_number == "" && flg == 0){
		        	alert("Please provide a mobile number");
					flg = 1;
					$("#calculatenow").removeClass("disabled");
		        }

		        if(mobile_number.length < 10 && flg == 0)
				{
					alert("Please provide a valid mobile number");
					flg = 1;
					$("#calculatenow").removeClass("disabled");
				}

		        if(flg == 0){
			        $.ajax
			        ({
			            type: "POST",
			            url: "/api/addLead.php",
			            dataType: 'json',
			            async: true,
			            data: {
			                "userMobileNumber":$("#pe-mobile-number").val(),
			                "userEmailAddress":"default",
			                "userFullName":"default",
			                "cityID":getCookie("timesaverzUserCity"),
			                "variableID":$("#variables option:selected").attr("data-variableid"),
			                "areaID":1,
			                "pinCode":400014,
			                "totalCost":final_price,
			                "jobDate":dt,
			                "jobTime":"2",
			                "jobAddress":"default",
			                "jobPaymentType":"pending",
			                "jobBookedFrom":"web",
			                "followupDate":"",
			                "jobQuantity":"1",
			                "jobStatus":"pending",
			                "utm_source":"painting-estimator",
			                "utm_medium":getCookie("timesaverz_utm_medium"),
			                "utm_term":getCookie("timesaverz_utm_term"),
			                "utm_campaign":getCookie("timesaverz_utm_campaign"),
			                "gclID":getCookie("timesaverz_gclID"),
			                "remarks":""
			            },
			            success: function (response) {
			                if(response.status=="successful"){
			                    $("#pe-modal-count-price").html(final_price);
			                    $(".pe-modal-result").fadeIn();
			                    setTimeout(showResults, 500);
			                    $("#calculatenow").removeClass("disabled");
			                }else{
			                    alert("Unable to calculate the estimate, please try again later!");
			                    $("#calculatenow").removeClass("disabled");
			                }
			            }
			        });

		        }


		   }
		});


	    function showResults() {
	        $(".result-loader").hide();
	        $(".final").show();
	        increaseCount();
	        $('#paint-estimator').data('bs.modal').handleUpdate();
	    }
	    function increaseCount() {
	        $('#pe-modal-count-price').each(function () {
	            $(this).prop('Counter', 0).animate({
	                Counter: $(this).text()
	            }, {
	                duration: 1000,
	                easing: 'swing',
	                step: function (now) {
	                    $(this).text(Math.ceil(now));
	                }
	            });
	        });
	    }

	    var min = 0;
	    var max = 3500;
	    var prices_arr = [0];
	    for (var x = 0; x <= max; x++) {
	        if (x % 10 == 0) {
	            prices_arr.push(x);
	        }

	    }
	    $(function () {
	        $(".slider").slider(
	                {
	                    value: 100,
	                    animate: "slow",
	                    orientation: "horizontal",
	                    min: min,
	                    max: (max / 10),
	                    slide: imSliding
	                }
	        );
	    });

	    function imSliding(event, ui) {
	        //update the amount by fetching the value in the value_array at index ui.value
	        $('#pe-modal-area').val(prices_arr[ui.value]);
	        $('#pe-modal-paintable-area').html((prices_arr[ui.value] * 1.5));
	    }

	    $("#pe-modal-area").val("1000");
	    $('#pe-modal-paintable-area').html("1500");

	    $('#pe-modal-area').on('input', function() {
	        if($('#pe-modal-area').val()<=3500){
	            $(".slider").slider('value',$('#pe-modal-area').val()/10);
	            $('#pe-modal-paintable-area').html(($('#pe-modal-area').val() * 1.5));
	        }else{
	            alert("Area cannot be greater than 3500 sqft.");
	        }

	    });



	    $(document).ready(function(){
	        $("#paintbrand").dropdown();
	        $("#paintproduct").dropdown();
	    })
</script>
<!--Footer Section-->

<!--Footer Section-->
<script src="<?php echo base_url('assets/cityook/js/jquery-1.11.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/bootstrap.min.js');?>"></script>
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


<!-- Scripts end -->
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

<script type="text/javascript">
    $(function () {
        $("ul#areasServed").liScroll();
    });
</script>

<script src="<?php echo base_url('assets/cityook/js/classie.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/dialogFx.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/cartPopup-1.16.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/modalEffects.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/cityook/js/feedbackSlide.min.js');?>"></script>
<script src="<?php echo base_url('assets/cityook/js/ouibounce.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/cityook/js/conversion.js');?>">
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

<img id="imgConversion" height="1" width="1" style="border-style:none;display:none;" alt=""
     src=""/>
<!-- End of Google Code for remarketing -->
		<!------- End Common Scripts -------->


		<script src="<?php echo base_url('assets/cityook/js/serviceMenu-1.3.min.js');?>"></script>
		<script src="<?php echo base_url('assets/cityook/js/animateFunction-1.6.min.js');?>"></script>
		<!------ Page Specific Scripts ------>
		<script type="text/javascript">
			//CleverTap events
			clevertap.event.push("Visited Screen", {
			  "Screen Name": "Supercategory Listing",
			  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
			});

			$(".imgBanners").on("click", function()
			{
				clevertap.event.push("Banner Clicked", {
				  "Banner Name": $(this).attr("data-bannerName"),
				  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
				});
			});

			$(".buttonSupercategory").on("click", function()
			{
				clevertap.event.push("Supercategory Selected", {
				  "Supercategory Name": $(this).attr("data-supercategoryName"),
				  "User ID": getCookie("timesaverzUserID") != "" ? getCookie("timesaverzUserID") : "0"
				});
			});
		</script>
		<script>
				$('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
		</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
	</body>
</html>

		<!--http://html.tonatheme.com/2017/plumber-aventex/ -->
		
		<!-- https://bootsnipp.com/snippets/e3Oe3  bootstrap drop down menu-->