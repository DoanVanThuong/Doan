
$('.book-relative-wp').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow:4,
        slidesToScroll: 1,
        autoplay: true,
        arrows:true,
        autoplaySpeed: 1500000,
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