<!-- template.index.news-study-info -->
<div class="row study-info" data-toggle="tooltip">
    <div class="news-title"><a href="javascript:void(0) " title="Thông Tin Đào tạo">Thông Tin Đào tạo</a></div>
    @foreach($news_dt as $item)
    <div class="col-md-4 col-sm-4">
        <div class="header-news">
           
            <h3><a href="/lich-thi" title="Lịch Thi" data-toggle="tooltip">Tuyển sinh &amp; Đào tạo</a></h3>
          
            <hr class="hr-news">
        </div>
        <div class="news-img ">
            <img src="{{$item->image}}" alt="" title="{{$item->name}}" class="img-responsive">
        </div>
        <div class="info-news  clearfix">
            <h3 class="title-news">
                <a href="/tin-tuc/{{$item->slug}} " title="{{$item->name}}">{{$item->name}}</a>
                <span class="badge">news</span>
                
            </h3>
            <p class="sub-title">
                {{$item->sumary}}
            </p>
        </div>
    </div>
    @endforeach
    @foreach($news_khcn as $item)
    <div class="col-md-4 col-sm-4">
        <div class="header-news">
            <h3><a href="/khoa-hoc-cong-nghe" title="Lịch Thi" data-toggle="tooltip">Khoa học &amp; Công nghệ</a></h3>
            <hr class="hr-news">
        </div>
        <div class="news-img ">
            <img src="{{$item->image}}" alt="" title="{{$item->name}}" class="img-responsive">
        </div>
        <div class="info-news  clearfix">
            <h3 class="title-news">
                <a href="/tin-tuc/{{$item->slug}} " title="{{$item->name}}">{{$item->name}}</a>
                <span class="badge">news</span>
                
            </h3>
            <p class="sub-title">
                {!!$item->sumary!!}
            </p>
        </div>
    </div>
    @endforeach
</div>

<!-- end template.index.news-study-info -->
