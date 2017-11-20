<section class="content-news-detail-wp">
    <div class="container">
        <div class="row">
            <h3 class="title">{{$data->name}}</h3>
            <div class="content">
                {!!$data->content!!}
                {{-- <img src="{{asset('img/img-toadam.jpg')}}" class="img-responsive" alt=""> --}}
            </div>
            <div class="author">{{$data->author}}</div>
            <div class="fb-share-button">
                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
                </script>
                <!-- Your share button code -->
                <div class="fb-share-button" data-href="http://khoacntt.doanvanthuong.tk/job-detail.html" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fut-edu.esy.es%2Fstudent%2Fket-qua-giai-quyet-don-xoa-diem-hki&amp;src=sdkpreparse">&nbsp;&nbsp;Share </a></div>
            </div>                        
        </div>
        @include('templates.detail.detail-news-comment')
</section>