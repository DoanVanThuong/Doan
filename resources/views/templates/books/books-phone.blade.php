<section class="phone-programing" data-ix="float-in-on-scroll-3">
    <div class="books-banner phone">
        <div class="books-banner-wp">
            <h2 class="books-title">Lập trình di động</h2>
            <hr class="hr-news">
            <ul class="list-inline books-list">
                <li><a href="javascript:void(0)" title="">Android</a></li>
                <li><a href="javascript:void(0)" title="">IOS</a></li>
                <li><a href="javascript:void(0)" title="">WindowPhone</a></li>
                <li><a href="javascript:void(0)" title="">swift</a></li>
                <li><a href="javascript:void(0)" title="">Ngôn ngữ khác</a></li>
            </ul>
        </div>
    </div>
    <div class="book-content-wp" data-ix="float-in-on-scroll-2">
        <div class="container">
            <div class="row book-content">                    
                @foreach($p_book_phone as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail text-center">
                        <a href="/sach/chi-tiet/{{$item->slug}}"  >
                            <img src="{{ $item->image}}" alt="" title ="{{$item->name}}" class="img-responsive">
                        </a>
                    </div>
                    <div class="caption text-center">
                        <a href="/sach/chi-tiet/{{$item->slug}}" data-toggle="tooltip" title="{{$item->name}}">{{ $item->name}}</a>
                    </div>
                </div>
                @endforeach                    
            </div>
        </div>        
    </div>
</section>