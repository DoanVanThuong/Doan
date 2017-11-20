<!--template.index.news & Event -->
    <div class="row ">
        <div class="news-title"><a href="/tin-tuc" title="Tin Tức và sự kiện" data-toggle="tooltip">Tin Tức &amp; Sự Kiện</a></div>
        <ul class="list-unstyled list-news">
            <?php 
            $n = 0;
            ?>
            @foreach($v_news as $item)
            <?php 
                $n++ 
            ?>
            <li class="clearfix" data-toggle="tooltip">
                <div class="news-img ">
                    <img src="{{asset($item->image)}}" alt="" title="{{$item->name}}" class="img-responsive">
                </div>
                <div class="info-news clearfix" data-toggle="tooltip">
                    <h3 class="title-news">
                    <a href="/tin-tuc/{{$item->slug}}" title="{{$item->name}}">{{$item->name}}&nbsp; <span class="time-news"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{$item->created_at}}</span></a>
                    {{-- tin mới nhất --}}
                    @if($n <=1 )
                    <span class="badge">news</span>
                    @endif
                    </h3>
                    <p class="sub-title">
                        {!!$item->sumary!!}
                    </p>
                </div>
            </li>
            @endforeach            
        </ul>
    </div>
<!-- end template.index.news & Event