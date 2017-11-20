// // Enable Carousel Controls bo cac thuoc tinh href="#myCarousel" data-slide="next"
//     $("#myCarousel .left").click(function(){
//         $("#myCarousel").carousel("prev");
//     });

//     $("#myCarousel .right").click(function(){
//         $("#myCarousel").carousel("next");
//     });
//     //hàm random so
function randomToN(maxVal) {
    var randVal = Math.random() * maxVal;
    return typeof 0 == 'undefined' ? Math.round(randVal) : randVal.toFixed(0);
};

$("#myCarousel").carousel({ interval: 2500 }); //set time out slider

$("#myCarousel").on('slide.bs.carousel', function() {

    // var carouselData = $(this).data('bs.carousel');
    //  var total = carouselData.$items.length; 
    //  // var currentIndex = carouselData.getItemIndex();
    //  var currentIndex =carouselData.getItemIndex($(e.relatedTarget));
    //  var currentItem = $(e.relatedTarget);

    // var slide = (currentIndex + 1);

    // var img="slidersach"+slide+".jpg";
    // alert(currentItem);
    // $(".book-banner").css('background-image', 'url(img'+slide +'.jpg)');  
    // alert('A new slide is about to be shown!');
    var list = ["slidersach1.jpg", "slidersach2.jpg", "slidersach3.jpg",
    "slidersach4.jpg", "slidersach5.jpg", "slidersach6.jpg",
    "slidersach7.jpg", "slidersach8.jpg",
    ], // Images
        ram = list[parseFloat(randomToN(list.length))], // Random 1 to n
        img = ram == undefined || ram == null ? list[0] : ram; // Detect null
    $(".book-banner").css("backgroundImage", "url(../img/slider/" + img + ")"); // push de background
});


$('.book-category-list li').click(function() {
    //xóa class active hiện tại
    $('.book-category-list li').removeClass('active')
    //click vào li nào

    var curr = $(this); //lưu li vừa click
    //lưu vị trí li đó
    var i = $('.book-category-list li').index(curr);

    curr.addClass('active');
});


//scroll to a something div,class
$("#language").click(function() {
    $('html,body').animate({
            scrollTop: $(".language-programing").offset().top
        },
        'slow');
});
$("#app").click(function() {
    $('html,body').animate({
            scrollTop: $(".app-programing").offset().top
        },
        'slow');
});
$("#web").click(function() {
    $('html,body').animate({
            scrollTop: $(".web-programing").offset().top
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