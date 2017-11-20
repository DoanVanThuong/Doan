<!-- template.index.info-quickjob -->
<div class="quickjob">
    <div class="content-title">
        <a href="/tuyen-dung" title="">Tuyển dụng CNTT</a>
    </div>
    <ul class="list-unstyled list-quick-jobs">
        @foreach($jobs as $item)
        <li>
            <a href="/tuyen-dung/{{$item->slug}}" data-toogle="tooltip" title="{{$item->name}}">{{$item->name}}</a>
            <span class="news-post-date">(Ngày: {{$item->startdate}})</span>
        </li>
        @endforeach
        
    </ul>
    <div class="view-more">
        <a href="/tuyen-dung" title="">Xem thêm</a>
    </div>
</div>
<!--end  template.index.info-quickjob -->
