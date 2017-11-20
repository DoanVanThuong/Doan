(function($) {
	//Timeline
	var timeline = new TimelineMax({repeat: -1, paused: true});
		timeline.add(TweenMax.staggerTo('.entry', 50, {y : '-1900px', ease: Power0.easeNone}, 0.3));
	var obj = document.getElementById('history-tl');
	$(window).scroll(function(event) {
		event.preventDefault();
			var from =  $('.history-faqs').offset().top +223;
			var to = from + $('.timeline').height();
			var scrollY = $(window).scrollTop();
			if(scrollY >= from && scrollY <= to) {
				timeline.play();
			} else {
				timeline.pause();
			}
			// console.log('window: ' + scrollY);
			// console.log('from: ' + from);

	});
	if(obj) {
		obj.addEventListener('mouseover', function() {
			timeline.play();
		});
		obj.addEventListener('mouseout', function() {
			timeline.pause();
		})
	}


	
})(jQuery);

$('.teacher-list-wp').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow:4,
        slidesToScroll: 4,
        autoplay: true,
        arrows:false,
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
$('.list-study li').click(function() {
    //xóa class active hiện tại
    $('.list-study li').removeClass('active')
    //click vào li nào

    var curr = $(this); //lưu li vừa click
    //lưu vị trí li đó
    var i = $('.list-study li').index(curr);

    curr.addClass('active');
});
//scroll to a something div,class
$("#award").click(function() {
    $('html,body').animate({
            scrollTop: $(".history-faqs").offset().top
        },
        'slow');
});
$("#teacher").click(function() {
    $('html,body').animate({
            scrollTop: $("#teacher-list").offset().top +100
        },
        'slow');
});
$("#sceince").click(function() {
    $('html,body').animate({
            scrollTop: $(".study-science").offset().top
        },
        'slow');
});
$("#phone").click(function() {
    $('html,body').animate({
            scrollTop: $(".phone-programing").offset().top
        },
        'slow');
});
$("#english").click(function() {
    $('html,body').animate({
            scrollTop: $(".english-programing").offset().top
        },
        'slow');
});
//menu fixed top
    $(window).scroll(function() {
        var navHeight = $(".header-top").outerHeight();  
        var currentHeight = $(document).scrollTop();
        if(currentHeight >= navHeight+150) {
           
            $('nav').addClass('fixed');
        } else {
            $('nav').removeClass('fixed');
        }    
    });