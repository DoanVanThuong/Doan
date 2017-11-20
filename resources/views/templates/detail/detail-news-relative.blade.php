<div class="row relative-news">
    <div class="relative-news-wp"> 
      
        @foreach($r_news as $item)
        @if($item->id != $data->id) 
        <div class="item-news" data-toggle="tooltip">
            <figure class="item-relative">
                <div class="thumb">
                    <img src="{{asset($item->image)}}" title="{{$item->name}}" class="img-responsive" /> 
                    <div class="date-news">{{$item->created_at}}</div>
                </div>                                
                <figcaption>
                    <div class="btn-more">
                        <a href="{{$item->slug}} " title="{{$item->name}}">Xem chi tiết</a>
                    </div>
                </figcation>                                
            </figure>
            <div class="news" data-toggle="tooltip">
                <a href="{{$item->slug}} " title="{{$item->name}}">{{$item->name}}</a>
                <p>{!!$item->sumary!!}</p>
            </div>
        </div> 
        @endif
        @endforeach          
    </div>
</div>