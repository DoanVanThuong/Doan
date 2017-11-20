<!-- logo-slider -->

<section class="logo-slider" data-ix="float-in-on-scroll">
    <div class="news-title">
        <a href="news.html" title="">Nhà tuyển dụng liên kết</a>
    </div>   
    <div class="container">
        <div class="row logo-slider-wp" data-toggle="tooltip">
            @foreach($slide_company as $item)
            <div class="col-md-2"><img src="{{asset($item->image)}}" class="img-responsive" alt="{{$item->text}}" title="{{$item->text}}"></div>
            @endforeach
            {{-- <div class="col-md-2"><img src="{{asset('img/logo/logo9.jpg')}}" class="img-responsive" alt=""></div>
            <div class="col-md-2"><img src="{{asset('img/logo/logo3.jpg')}}" class="img-responsive" alt=""></div>
            <div class="col-md-2"><img src="{{asset('img/logo/logo8.png')}}" class="img-responsive" alt=""></div>
            <div class="col-md-2"><img src="{{asset('img/logo/logo7.png')}}" class="img-responsive" alt=""></div>
            <div class="col-md-2"><img src="{{asset('img/logo/logo6.jpg')}}" class="img-responsive" alt=""></div> --}}
        </div>
    </div>
</section>
<!-- end logo-slider -->