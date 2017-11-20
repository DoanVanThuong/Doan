$('.relative-news-wp').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow:3,
        slidesToScroll: 1,
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
$('.reply-form').hide();
            $('.reply-reply-form').hide();
            $('.num-like').hide();

            $('.like-reply-wp .reply').click(function() {
                var parent = $(this).parent().parent();
                $(parent).find('.reply-form').slideToggle();
            });
            $('.reply').click(function() {
                var parent2 = $(this).parent().parent().parent();
                parent2.find('.list-reply .reply-reply-form').slideToggle();
            });
            var count = 0;
            $('.like').click(function() {
                count++;
                var x = count % 2;
                if (x == 1) {
                    var parent = $(this).parent().parent();
                    var numlike = parseInt(parent.find('.num-like').text());
                    numlike++;
                    parent.find(".num-like").text(numlike);
                    parent.find(' .num-like').show();
                    parent.find(' .heart').css('color', 'red');

                } else {

                    var parent = $(this).parent().parent();
                    var numlike = parseInt(parent.find(' .num-like').text());
                    numlike--;
                    parent.find(".num-like").text(numlike);
                    $('.num-like').hide();
                    $(' .heart').css('color', 'black');
                }


            });



    

$('#btn-comment').click( function() {
        // $('.form-group').submit(function(){
        //     $('#comment').val(' ');
        // });
        $('.form-group').submit();
});
 $('.form-group').submit(function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        var news_id = $(this).data('news');
        var contents = $(this).find('.form-control').val();
        var csrf_token = $(this).find('meta[name="token"]').attr('content');
        
        $.ajax({
            type: 'POST',
            url: '/comment/'+id,
            data : {
                news_id : news_id,
                content : contents,
                _token : csrf_token,
            },
            success : function(data) {
                $( ".list-comment" ).prepend(data );

            },
            error: function(err) {
                alert("bạn chưa nhập comment");
            }
        });
 });
