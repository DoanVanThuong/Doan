(function($) {
	//Story section
	$('.story-slider').slick({
		dots: true,
		infinite: true,
        autoplay: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
	});

	//Check devices
	window.mobileAndTabletcheck = function() {
        var check = false;
        (function(a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    };
    if (mobileAndTabletcheck() == false) {
		$(window).scroll(function() {
			var hStory = $('.story-anim').offset().top;
			var hFeature = $('.features').offset().top - $('.our-story-imgs').outerHeight() -100;
			var scrollTop = $(this).scrollTop();
			if((scrollTop > hStory) && (scrollTop < hFeature)) {
				$('.our-story-imgs').addClass('fixed-anim');
			} else {
				$('.our-story-imgs').removeClass('fixed-anim');
			}
		});
	}

	//Features
	$('.minimize').click(function(e) {
		e.stopPropagation();
		$(this).parent().hide(400);
		$(this).parents('li').removeAttr('class');
	});

	$('.feature-menu li ').click(function(e) {
		e.preventDefault();
		var curr = $(this);

		if (curr.is(':first-child') || curr.is(':nth-child(11)') || curr.is(':nth-child(12)')) {
			$('.feature-menu li').removeAttr('class');
			$('.feature-menu li').css('height', 'initial');
			$('.feature-menu li .feature-txt').hide();
			curr.find('.feature-txt').show(400);
			curr.addClass('open');
			if(curr.is(':nth-child(11)') || curr.is(':nth-child(12)')) {
				curr.addClass('bg-white');
			}
		} else {

			$('.feature-menu li').removeAttr('class');
			$('.feature-menu li .feature-txt').hide();
			$('.feature-menu li').css('height', 'initial');
			$('.feature-menu li').find('.feature-cnt').css('verticalAlign', 'middle');
			curr.addClass('show-item');
			curr.find('.feature-txt').show();
			if (mobileAndTabletcheck() == false) {
				var currHeight = curr.height();
				if (curr.is(':nth-child(3n+1)')) {//3
					var i = $('.feature-menu li').index(curr) + 1;
					var j = $('.feature-menu li').index(curr) + 2;
					$('.feature-menu li:eq(' + i + ')').height(currHeight);
					$('.feature-menu li:eq(' + j + ')').height(currHeight);
					$('.feature-menu li:eq(' + i + ')').find('.feature-cnt').css('verticalAlign', 'top');
					$('.feature-menu li:eq(' + j + ')').find('.feature-cnt').css('verticalAlign', 'top');
				} else if (curr.is(':nth-child(3n+3)')) {//
					var i = $('.feature-menu li').index(curr) - 1;
					var j = $('.feature-menu li').index(curr) - 2;
					$('.feature-menu li:eq(' + i + ')').height(currHeight);
					$('.feature-menu li:eq(' + j + ')').height(currHeight);
					$('.feature-menu li:eq(' + i + ')').find('.feature-cnt').css('verticalAlign', 'top');
					$('.feature-menu li:eq(' + j + ')').find('.feature-cnt').css('verticalAlign', 'top');

				} else {//2
					curr.prev().height(currHeight);
					curr.next().height(currHeight);
					curr.prev().find('.feature-cnt').css('verticalAlign', 'top');
					curr.next().find('.feature-cnt').css('verticalAlign', 'top');
				}
			}
		}
	});

	// //Timeline 
	// var controller = new ScrollMagic.Controller();
	// var liNum = $('.timeline li').length - 5;
	// var yPercent = -100 * liNum;

	// /*var tlAnim = new TweenMax.staggerTo($('.timeline li'), 0.5, {css:{top: '340', position: 'fixed'}});*/
	// var tlAnim = new TweenMax.staggerTo($('.timeline li'), 0.5, {y : yPercent + '%'}, +0.3);
	// var tlScene = new ScrollMagic.Scene({
 //        triggerElement: '.history-faqs' ,
 //        triggerHook: 0.2
 //    })
	// .setTween(tlAnim)
	// .addTo(controller);
	//Timeline
	var timeline = new TimelineMax({repeat: -1, paused: true});
		timeline.add(TweenMax.staggerTo('.entry', 50, {y : '-1900px', ease: Power0.easeNone}, 0.3));
	var obj = document.getElementById('history-tl');


	$(window).scroll(function(event) {
		event.preventDefault();
		if($('body').hasClass('about-page')) {
			var from =  $('.history-faqs').offset().top - 223;
			var to = from + $('.timeline').height();
			var scrollY = $(window).scrollTop();
			if(scrollY >= from && scrollY <= to) {
				timeline.play();
			} else {
				timeline.pause();
			}
			console.log('window: ' + scrollY);
			console.log('from: ' + from);
		}
	});
	if(obj) {
		obj.addEventListener('mouseover', function() {
			timeline.play();
		});
		obj.addEventListener('mouseout', function() {
			timeline.pause();
		})
	}

	//Faqs
	$('.general-list li').click(function(e) {
		e.preventDefault();
		$('.general-list li').removeClass('active');
		$('.general-list li').find('.ui-icon').removeClass('arrow-down');
		$('.general-list li').find('.ui-icon').addClass('arrow-right');
		$('.general-list li').find('.faq-content').hide();
		var curr = $(this);
		curr.addClass('active');
		curr.find('.ui-icon').addClass('arrow-down');
		curr.find('.ui-icon').removeClass('arrow-right');
		curr.find('.faq-content').show();
	});
	$('.tech-list li').click(function(e) {
		e.preventDefault();
		$('.tech-list li').removeClass('active');
		$('.tech-list li').find('.ui-icon').removeClass('arrow-down');
		$('.tech-list li').find('.ui-icon').addClass('arrow-right');
		$('.tech-list li').find('.faq-content').hide();
		var curr = $(this);
		curr.addClass('active');
		curr.find('.ui-icon').addClass('arrow-down');
		curr.find('.ui-icon').removeClass('arrow-right');
		curr.find('.faq-content').show();
	});
	//slider
	$('.faqs-list').slick({
		dots: true,
		arrows: false,
		slidesPerRow: 1,
        rows: 6
	});

})(jQuery);