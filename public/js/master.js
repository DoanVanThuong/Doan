// function init() {
//     window.addEventListener('scroll', function(e){
//         var distanceY = window.pageYOffset || document.documentElement.scrollTop,
//             shrinkOn = 300,
//             header = document.querySelector(".header-top");
//         if (distanceY > shrinkOn) {
//             classie.add(header,"smaller");
//         } else {
//             if (classie.has(header,"smaller")) {
//                 classie.remove(header,"smaller");
//             }
//         }
//     });
// }
// window.onload = init();
/*Slider header-top*/
$('.slider-header-top').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow:3,
        slidesToScroll: 1,
        autoplay: true,
        arrows:false,
        autoplaySpeed: 1000,
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



 //when scrolling to 50px will be appear
    window.onscroll = function() {scrollFunction()}; 
    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById('scroll').style.display ="block";
            // document.getElementById('open').style.opacity="0.5";
        } else {
            document.getElementById('scroll').style.display ="none";
        }
    }
    
    //scroll to top  
    $("#scroll").click(function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: 0}, 600); 
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

    // search box
$("#search-btn").click(function(){
	// alert("hello");
	$(".search-box").slideToggle();
});
// shine effect
function ShineImg(img) {

    this.imgToCanvas = function(img) {
        this.canvas = document.createElement('canvas');
        this.canvas.width = img.width;
        this.canvas.height = img.height;
        if (img.className != '') { this.canvas.className = img.className; }
        this.context = this.canvas.getContext('2d');
        this.image = img;
        this.context.drawImage(img, -1, 0, canvas.width, canvas.height);
        img.parentNode.replaceChild(this.canvas, img);
    }

    this.imgToCanvas(img);

    this.placeGradient = function(x, y) {
        this.context.save();
        this.gradient = this.context.createLinearGradient(x, 40 * Math.sin(15 * Math.PI / 180), x + 40, 40 * Math.sin(15 * Math.PI / 180));
        gradient.addColorStop(0, 'rgba(5,5,255,0)');
        gradient.addColorStop(0.5, 'rgba(5,255,255,0.5)');
        gradient.addColorStop(1, 'rgba(255,5,5,0)');
        this.context.rotate(15 * Math.PI / 180);
        this.context.fillStyle = gradient;
        this.context.globalCompositeOperation = 'source-atop';
        this.context.fillRect(x, y - x * Math.sin(15 * Math.PI / 180), 40, this.canvas.height / Math.cos(15 * Math.PI / 180) + 40 * Math.sin(15 * Math.PI / 180));
        this.context.restore();
    }

    var x = -(this.canvas.width + this.canvas.height * Math.sin(15 * Math.PI / 180));
    this.animateGradient = function() {
        this.animation = setInterval(function() {
            this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
            this.context.drawImage(img, -1, 0, canvas.width, canvas.height);
            this.placeGradient(x, -40 * Math.sin(15 * Math.PI / 180));
            x += 1;
            if (x > this.canvas.width + this.canvas.height * Math.sin(15 * Math.PI / 180)) {
                x = -(this.canvas.width + this.canvas.height * Math.sin(15 * Math.PI / 180));
                clearInterval(this.animation);
            }
        }, 1);
    }

    this.shine = setInterval(this.animateGradient, 2000);

    window.addEventListener('blur', function() {
        clearInterval(this.shine);
    }, false);

    window.addEventListener('focus', function() {
        this.shine = setInterval(this.animateGradient, 7000);
    }, false);

    return this;

}

window.onload = function() {
    ShineImg(document.getElementById('logo2'));
}

// $(".navbar-nav li").click(function(){
//     var curr = $(this);
//     curr.addClass("active");
// });
