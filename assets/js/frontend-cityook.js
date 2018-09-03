/**
 * Become a partner register section
 */
var base_url = "http://localhost/cityook";
$(document).ready(function() {

    console.log( "ready!" );
    $('#contact-form').validator();
// when the form is submitted
    $('#contact-form').on('submit', function (e) {
        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {

            var settings = {

                "async": true,

                "crossDomain": true,

                "url": base_url + '/employee/register/otp',

                "data" : $('#contact-form').serialize(),

                "method": "POST",

                "headers": {
                },
                beforeSend: function() {
                    // Show full page LoadingOverlay
                    $.LoadingOverlay("show");
                }

            }

            $.ajax(settings).done(function (data) {

                // console.log(data);

                if(data.error === false && data.type === 'success') {

                    setTimeout(function() {
                        $.LoadingOverlay("hide");
                        swal({

                            title: "success",

                            text: data.message,

                            icon: "success",
                            buttons: true,

                        })
                            .then((willDelete) => {
                                if (willDelete) {
                                    window.location.href = base_url + '/employee/register/step-2';
                                } else {
                                    swal("Your imaginary file is safe!");
                                }
                            });

                    }, 3000);


                } else if(data.error === true && data.type === 'exists_otp') {
                    setTimeout(function() {
                        $.LoadingOverlay("hide");
                        swal({

                            title: "Warning",

                            text: data.message,

                            icon: "warning",
                            buttons: true,

                        })
                            .then((willDelete) => {
                                if (willDelete) {
                                    window.location.href = base_url + "/employee/register/step-2";
                                } else {
                                    swal("Your imaginary file is safe!");
                                }
                            });

                    }, 3000);
                }

                else {

                    setTimeout(function() {
                        $.LoadingOverlay("hide");
                        swal({

                            title: "Error",

                            text: data.message,

                            icon: "error",
                            buttons: true,

                        })
                            .then((willDelete) => {
                                if (willDelete) {
                                    window.location.href = base_url + '/employee/register';
                                } else {
                                    swal("Your imaginary file is safe!");
                                }
                            });
                    }, 3000);
                }
            });
            return false;
        }
    });
});





<!-- crasoul start css js -->
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});

$(document).ready(function() {

    var owl = $("#owl-demo");
    //owl.trigger('owl.play',1000);
    owl.owlCarousel({
        items : 10, //10 items above 1000px browser width
        itemsDesktop : [1000,5], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,3], // betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0
        itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option,

    });

    // Custom Navigation Events
    $(".next").click(function(){
        owl.trigger('owl.next');
    })
    $(".prev").click(function(){
        owl.trigger('owl.prev');
    })
    $(".play").click(function(){
        owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
    })
    $(".stop").click(function(){
        owl.trigger('owl.stop');
    })

});
<!-- ccarsoul end here -->