(function() {
    function readURL(input) {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function (e) 
            {
                if($("img").is("#blah"))
                {
                    $('#blah').attr('src', e.target.result);
                }
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    };

    $("#imgInp").change(function(){
        readURL(this);
    });

    function changeInput() {
        $(".photos-file").change(function() {
            var filename = $(this).val().replace(/.*\\/, "");
            console.log(filename);
            $(this).siblings('.img-name').text(filename);
        });
    };

   changeInput();

}) ();


$('.navbar-toggler').click(function(){

    $(this).addClass('toggled');

    $('.navbar').toggleClass('open');


    if($('.navbar').hasClass('open')) {

        $('.brb, .collapser').wrapAll('<div class="scr"></div>');

    } else {

        $('.brb, .collapser').unwrap();
    }

});


$('.show-filter').click(function(){

    $(this).toggleClass('open');

    $('.filter').toggleClass('closed');

});


$('.flexbox-slide').hover(function(){

    $('.flexbox-slide').removeClass('active');

    $(this).addClass('active');

});



function matchHeight() {
    var firstSlideHeight = $('.three-sections .col-md-4').first().innerHeight();
    $('.three-sections .col-md-4').css('height', firstSlideHeight + 'px');
}





$('.slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    autoplay: true
});

$('.list-slider').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: true,
    arrows: true,
    autoplay: false,
    appendArrows: '.slick-nav',
    appendDots: '.slick-nav',
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 580,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]

});

$('.item-images').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    autoplay: false,
    appendDots: '.item-slick-nav'
});

function remCl() {
    var $windowWidth = $(document).width();
    if ($windowWidth < 560) {
        $('.flexbox-slide').addClass('col-md-4');

    } else {
        $('.flexbox-slide').removeClass('col-md-4');

    }
}

function mobileOnly() {
    $('.mobile-only').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        appendDots: '.item-slick-nav',
        responsive: [
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.showcase-items').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        appendDots: '.showcase-nav-dots',
        responsive: [

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1.5,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.flexbox-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        appendDots: '.flexbox-nav-dots',
        responsive: [

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1.5,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


    $('.threes-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        appendDots: '.threes-nav-dots',
        responsive: [

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });




}

function detectWidth(){
    var $windowWidth = $(document).width();
    if ($windowWidth < 768) {
        mobileOnly();
    } else {
        $('.mobile-only').slick("unslick");

    }
}


$(window).resize(function(){
    detectWidth();
    mobileOnly();
    matchHeight();
});


$(document).ready(function(){
    var $windowWidth = $(document).width();
    if ($windowWidth < 768) {
        mobileOnly();
        remCl();
    }else{
        $('.mobile-only').slick("unslick");
    }

    matchHeight();

});


$(".dropdown-menu li a").click(function(){
    var selText = $(this).text();
    $(this).parents('.select-box').find('.dropdown-toggle').html(selText);
});

(function(){
    // $('.flex-container').waitForImages(function() {
    //     $('.spinner').fadeOut();
    // }, $.noop, true);

    $(".flex-slide").each(function(){
        $(this).hover(function(){
            $(this).find('.flex-title').css({
                transform: 'rotate(0deg)',
                top: '10%'
            });
            $(this).find('.flex-about').css({
                opacity: '1'
            });
        }, function(){
            $(this).find('.flex-title').css({
                transform: 'rotate(90deg)',
                top: '15%'
            });
            $(this).find('.flex-about').css({
                opacity: '0'
            });
        })
    });
})();


