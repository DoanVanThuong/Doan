<section class="english-programing">
        <div class="books-banner english">
            <div class="books-banner-wp">
                <h2 class="books-title">Tiếng anh chuyên ngành</h2>
                <hr class="hr-news">
                <ul class="list-inline books-list">
                    <li><a href="/sach/{{$cate[8]->slug}}" title="">Tiếng anh chuyên ngành</a></li>
                    
                    <li><a href="javascript:void(0)" title="">Ngôn ngữ khác</a></li>
                </ul>
            </div>
        </div>
        <div class="book-content-wp">
            <div class="container">
                <div class="row book-content">                    
            @foreach($e_book_english as $item)
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail text-center">
                    <a href="/sach/chi-tiet/{{$item->slug}}" title="{{ $item->name}}" >
                        <img src="{{ $item->image}}" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="caption text-center">
                    <a href="/sach/chi-tiet/{{$item->slug}}" data-toogle="tooltip" title="{{ $item->name}}">{{ $item->name}}</a>
                </div>
            </div>
            @endforeach                    
        </div>
            </div>
        </div>
    </section>