<!-- templates.news.news-relative -->
<div class="news-title"><a href="javascript:void(0) " title="">Tin liên quan</a></div>
<div class="row relative-news">
    <div class="relative-news-wp"> 
        @foreach($v_news as $item)
        <div class="item-news" data-toggle="tooltip">
            <figure class="item-relative">
                <div class="thumb">
                    <img src="{{$item->image}}" title="{{$item->name}}" class="img-responsive" /> 
                    <div class="date-news">{{$item->created_at}}</div>
                </div>                                
                <figcaption>
                    <div class="btn-more">
                        <a href="/tin-tuc/{{$item->slug}} " title="{{$item->name}}">Xem chi tiết</a>
                    </div>
                </figcation>                                
            </figure>
            <div class="news">
                <a href="/tin-tuc/{{$item->slug}}" title="{{$item->name}}">{{$item->name}}</a>
                <p>{!!$item->sumary!!}</p>
            </div>
        </div> 
        @endforeach                              
        
    </div>
</div>
<!-- end templates.news.news-relative -->
