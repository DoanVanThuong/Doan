<!-- template.index.logo-slider -->
<section class="logo-slider">
    <div class="news-title">Liên Kết các Khoa</div>
    <div class="container">
        <div class="row logo-slider-wp">
            @foreach($slide_faculty as $item)
            <div class="col-md-2">
                <img src="{{$item->image}}" class="img-responsive" alt="" data-toggle="tooltip" title="{{$item->text}}">
                <caption><a href="javascript:void(0) " title="{{$item->text}}" data-toggle="tooltip">{{$item->text}}</a></caption>
            </div>
            @endforeach
           
        </div>
    </div>
</section>
<!-- end template.index.logo-slider -->