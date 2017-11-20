<!--template.index.news student -->
<div class="row student-info" data-toggle="tooltip">
    <div class="news-title"><a href="javascript:void(0) " title="Thông Tin Sinh Viê">Thông Tin Sinh Viên</a></div>
    <div class="col-md-4 col-sm-4">
        <div class="header-news">
            <h3><a href="/tin-tuc" title="Tin Tức" data-toggle="tooltip">Tin tức</a></h3>
            <hr class="hr-news">
        </div>
        <div class="news-img ">
            <img src="{{$news_news->image}}" alt="" title="{{$news_lichthi->name}}" class="img-responsive">
        </div>
        <div class="info-news  clearfix">
            <h3 class="title-news">
                <a href="/tin-tuc/{{$news_news->slug}} " title="{{$news_news->name}}">{{$news_news->name}}</a>
                <span class="badge">news</span>
                
            </h3>
            <p class="sub-title">
                {!!$news_news->sumary!!}
            </p>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="header-news">
            <h3><a href="/lich-thi" title="Lịch Thi" data-toggle="tooltip">Lịch thi</a></h3>
            <hr class="hr-news">
        </div>
        <div class="news-img ">
            <img src="{{asset($news_lichthi->image)}}" title="{{$news_lichthi->name}}" alt="{{$news_lichthi->name}}" class="img-responsive">
        </div>
        <div class="info-news  clearfix">
            <h3 class="title-news">
                <a href="/tin-tuc/{{$news_lichthi->slug}} " title="{{$news_lichthi->name}}">{{$news_lichthi->name}}</a>
                <span class="badge">news</span>

            </h3>
            <p class="sub-title">
                {!!$news_lichthi->sumary!!}
            </p>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="header-news">
            <h3><a href="/hoat-dong" title="Hoạt động sinh viên" data-toggle="tooltip">Hoạt đông sinh viên</a></h3>
            <hr class="hr-news">
        </div>
        <div class="news-img ">
            <img src="{{$h_news->image}}" alt="" class="img-responsive" title="{{$news_lichthi->name}}">
        </div>
        <div class="info-news  clearfix">
            <h3 class="title-news">
                <a href="/tin-tuc/{{$h_news->slug}}" title="{{$news_lichthi->name}}">{{$h_news->name}}</a>
                <span class="badge">news</span>
                
            </h3>
            <p class="sub-title">
                {!!$h_news->sumary!!}
            </p>
        </div>
    </div>
</div>
<!--end template.index.news student -->
