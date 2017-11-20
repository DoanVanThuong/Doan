$('.slider-wp').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow:1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        focusOnSelect: true,
        centerMode: false,

        nextArrow: '<div class="slider-control right"><i class="fa fa-chevron-right btn-next" aria-hidden="true"></i></div>',
        prevArrow: '<div class="slider-control left"><i class="fa fa-chevron-left btn-prev" aria-hidden="true"></i></div>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            } // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    }

);


// slider news
$('.list-news').slick({
        dots: true,
        arrows: false,
        slidesPerRow: 1,
        rows: 3
    });
// slider quick jobs
$('.list-quick-jobs').slick({
        dots: true,
        arrows: false,
        slidesPerRow: 1,
        rows: 4
    });


/*LOGO*/

$('.logo-slider-wp').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows:false,
        slidesToShow:5,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        focusOnSelect: true,
        centerMode: false,

        nextArrow: '<div class="slider-control right"><i class="fa fa-chevron-right btn-next" aria-hidden="true"></i></div>',
        prevArrow: '<div class="slider-control left"><i class="fa fa-chevron-left btn-prev" aria-hidden="true"></i></div>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            } // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    }

);