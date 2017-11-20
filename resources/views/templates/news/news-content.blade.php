<!-- templates.news.news-content -->
<div class="row">
    @foreach($v_news as $item)
    <div class="col-md-6 item-news clearfix" data-toggle="tooltip">
        <a href="/tin-tuc/{{$item->slug}}" title="{{$item ->name}}" class="thumb">
            <img src="{{$item->image}}" class="img-responsive"  alt="" title="{{$item ->name}}">
        </a>
        <div class="content-wp">
            <a href="/tin-tuc/{{$item->slug}}" title="{{$item ->name}}">{{$item ->name}}<span><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{$item->created_at}}</span></a>
            <p>{!!$item->sumary!!}</p>
            <a href="/tin-tuc/{{$item->slug}} " data-toggle="tooltip" class="view-more" title="Xem chi tiết">Xem chi tiết &nbsp;</a>
        </div>
    </div>
    @endforeach
    
</div>

<!-- end templates.news.news-content -->
