<!-- job-content -->
<div class="row jobs-wp">
    <div class="news-title"><a href="news.html" title="">Tuyển dụng mới nhất</a></div>

    @foreach($v_job as $item)
    <article class="list-jobs clearfix">
        <div class="item-jobs-img">
            <img src="{{ $item ->image}}" class="img-responsive" alt="">
        </div>
        <div class="item-job-content-wp">
            <p class="job-title">{{ $item ->name}}</p>
            <p class="detail-job">
                <span class="company">{{ $item ->company}}</span>&nbsp;
                <span class="style-job"><i class="fa fa-clock-o"></i> {{ $item ->type}}</span>&nbsp;
                <span class="exp"><i class="fa fa-calendar"></i>&nbsp;{{ $item ->startdate}} - {{ $item ->enddate}}</span>&nbsp;
                <span class="tag"><a href="" title="">{{ $item ->tag}}</a></span>
            </p>
        </div>
        <div class="item-job-viewmore">
            <button type="submit" class="btn btn-primary">
                <a href="/tuyen-dung/{{$item->slug}}" title="">Xem ngay</a>
            </button>
        </div>                   
    </article>
    @endforeach                        
</div> 
<!-- end job-content -->