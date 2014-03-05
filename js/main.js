(function($) {
  
    /*
    Form Validation
    */
    jQuery.validator.setDefaults({
        errorPlacement: function(error, element) {
        // if the input has a prepend or append element, put the validation msg after the parent div
        if(element.parent().hasClass('input-prepend') || element.parent().hasClass('input-append')) {
        error.insertAfter(element.parent());    
        // else just place the validation message immediatly after the input
        } else {
        error.insertAfter(element);
        }
        },
        errorElement: "small", // contain the error msg in a small tag
        wrapper: "div", // wrap the error message and small tag in a div
        highlight: function(element) {
        $(element).closest('.form-group').addClass('has-alert'); // add the Bootstrap error class to the control group
        },
        success: function(element) {
        $(element).closest('.form-group').removeClass('has-alert'); // remove the Boostrap error class from the control group
        }
    });


	$('#fadeout').fadeOut(7000);

    $("#copy_times").click(copyTime);
        function copyTime()
        {
            var start=$("#mon_start").val();
            var finish=$("#mon_finish").val();
            if (this.checked==true) {
                $("#tues_start").val(start);
                $("#tues_finish").val(finish);
                $("#wed_start").val(start);
                $("#wed_finish").val(finish);
                $("#thurs_start").val(start);
                $("#thurs_finish").val(finish);
                $("#fri_start").val(start);
                $("#fri_finish").val(finish);
                $("#sat_start").val(start);
                $("#sat_finish").val(finish);
                $("#sun_start").val(start);
                $("#sun_finish").val(finish);
            }
        }


    var App = {
 
    /**
    * Init Function
    */
    init: function() {
        App.HomeOpacity();
        App.ScrollToContact();
        App.ScrollBack();
        App.Preloader();
        App.Animations();
        App.Carousel();
        App.Lightbox();
    },

 
    HomeOpacity: function() {
        var h = window.innerHeight;
        $(window).on('scroll', function() {
            var st = $(this).scrollTop();
            $('#home').css('opacity', (1-st/h) );
        });
    },


    /**
    * Scroll To Contact
    */
    ScrollToContact: function() {
    $('#button_more').click(function () { $.scrollTo('#about',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#home_link').click(function () { $.scrollTo('#home',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#features_link').click(function () { $.scrollTo('#about',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#newsletter_link').click(function () { $.scrollTo('#newsletter',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#blog_link').click(function () { $.scrollTo('#dev_blog',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#about_arrow_back').click(function () { $.scrollTo('0px',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#about_arrow_next').click(function () { $.scrollTo('#features_1',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#features_1_arrow_back').click(function () { $.scrollTo('#about',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#features_1_arrow_next').click(function () { $.scrollTo('#features_2',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#features_2_arrow_back').click(function () { $.scrollTo('#features_1',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#features_2_arrow_next').click(function () { $.scrollTo('#features_3',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#features_3_arrow_back').click(function () { $.scrollTo('#features_2',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#features_3_arrow_next').click(function () { $.scrollTo('#gallery',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#gallery_arrow_back').click(function () { $.scrollTo('#features_3',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#gallery_arrow_next').click(function () { $.scrollTo('#dev_blog',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    $('#dev_blog_arrow_back').click(function () { $.scrollTo('0px',1000,{easing:'easeInOutExpo',offset:0,'axis':'y'});});
    },
 
 
 
    /**
    * Scroll Back
    */
    ScrollBack: function() {
        $('#arrow_back').click(function () {
            $.scrollTo('#home',1500,{easing:'easeInOutExpo',offset:0,'axis':'y'});
        });
    },
 
 
    /**
    * Preloader
    */
    Preloader: function() {
        $(window).load(function() {
            $('#status').delay(100).fadeOut('slow');
            $('#preloader').delay(500).fadeOut('slow');
            $('body').delay(500).css({'overflow':'visible'});
            setTimeout(function(){$('#logo').addClass('animated fadeInDown')},500);
            setTimeout(function(){$('#logo_header').addClass('animated fadeInDown')},600);
            setTimeout(function(){$('#slogan').addClass('animated fadeInDown')},700);
            setTimeout(function(){$('#home_image').addClass('animated fadeInUp')},900);
        })
    },


    /**
    * Animations
    */
    Animations: function() {
        $('#about').waypoint(function() {
            setTimeout(function(){$('#about_intro').addClass('animated fadeInDown')},0);
            setTimeout(function(){$('#service_1').addClass('animated fadeInDown')},300);
            setTimeout(function(){$('#service_2').addClass('animated fadeInDown')},500);
            setTimeout(function(){$('#service_3').addClass('animated fadeInDown')},700);
            setTimeout(function(){$('#service_4').addClass('animated fadeInDown')},900);
            setTimeout(function(){$('#service_5').addClass('animated fadeInDown')},1100);
            setTimeout(function(){$('#service_6').addClass('animated fadeInDown')},1300);
        }, { offset: '50%' });
 
        $('#features_1').waypoint(function() {
            setTimeout(function(){$('#features_1_content').addClass('animated fadeInDown')},0);
            setTimeout(function(){$('#features1a_image').addClass('animated fadeInRight')},1100);
            setTimeout(function(){$('#features1b_image').addClass('animated fadeInRight')},600);
        }, { offset: '50%' });
 
        $('#features_2').waypoint(function() {
            setTimeout(function(){$('#features_2_content').addClass('animated fadeInDown')},0);
            setTimeout(function(){$('#features2a_image').addClass('animated fadeInLeft')},1100);
            setTimeout(function(){$('#features2b_image').addClass('animated fadeInLeft')},600)
        }, { offset: '50%' });
 
        $('#features_3').waypoint(function() {
            setTimeout(function(){$('#features_3_intro').addClass('animated fadeInDown')},0);
            setTimeout(function(){$('#features_3_content_left, #features_3_content_right').addClass('animated fadeInUp')},700);
            setTimeout(function(){$('#features_3_content_center').addClass('animated fadeInDown')},600)
        }, { offset: '50%' });
 
        $('#gallery').waypoint(function() {
            setTimeout(function(){$('#gallery_intro').addClass('animated fadeInDown')},0);
            setTimeout(function(){$('#gallery_carousel').addClass('animated fadeInUp')},700)
        }, { offset: '50%' });
 
        $('#dev_blog').waypoint(function() {
            setTimeout(function(){$('#dev_blog_intro').addClass('animated fadeInDown')},0);
            setTimeout(function(){$('#dev_blog_content').addClass('animated fadeInDown')},700)
        }, { offset: '50%' });
 
        $('#blog_header').waypoint(function() {
            setTimeout(function(){$('#title').addClass('animated fadeInDown')},0);
        }, { offset: '50%' });

    },


    /**
    * Carousel
    */
    Carousel: function() {
        $('#owl-gallery').owlCarousel({
            items : 5,
            itemsDesktop : [1199,5],
            itemsDesktopSmall : [980,5],
            itemsTablet: [768,5],
            itemsTabletSmall: [550,2],
            itemsMobile : [480,2],
        });
    },

    /**
    * Nivo Lightbox
    */
    Lightbox: function() {
        $('#owl-gallery a').nivoLightbox({
            effect: 'fall',                             // The effect to use when showing the lightbox
        });
    },
 

 }

$(function() {
  App.init();
  });


})(jQuery);