$(function(){
    'use strict';
    $(".right-side-nav li").click(function (){
        $(this).addClass('active').siblings().removeClass('active');
    });

    $('#file').change(function() {
        $('.custom-file-upload').html($(this).val()).css('color', 'black');
    });
    // Owl Carousel
    $('.slide-show .owl-carousel').owlCarousel({
        dots:false,
        nav:true,
        rtl:true,
        loop:true,
        margin:20,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.owl-carousel').owlCarousel({
        dots:false,
        nav:true,
        rtl:true,
        loop:true,
        margin:20,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });


    $('.owl-nav .owl-prev, .owl-nav .owl-next').empty();

    $('[data-toggle="popover"]').popover()
});


