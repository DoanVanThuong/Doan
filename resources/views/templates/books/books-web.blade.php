<section class="web-programing" data-ix="float-in-on-scroll-2">
        <div class="books-banner web">
            <div class="books-banner-wp">
                <h2 class="books-title">Lập trình Web</h2>
                <hr class="hr-news">
                <ul class="list-inline books-list">
                    <li><a href="/sach/{{$cate[6]->slug}}" title="">HTML/CSS/JS</a></li>
                    <li><a href="/sach/{{$cate[6]->slug}}" title="">PHP</a></li>
                    <li><a href="/sach/{{$cate[6]->slug}}" title="">ASP.NET</a></li>
                    <li><a href="/sach/{{$cate[6]->slug}}" title="">MVC</a></li>
                    <li><a href="/sach/{{$cate[6]->slug}}" title="">Ngôn ngữ khác</a></li>
                </ul>
            </div>
        </div>
        <div class="book-content-wp">
            <div class="container">
                <div class="row book-content">                    
                    @foreach($v_book_web as $item)
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail text-center">
                            <a href="/sach/chi-tiet/{{$item->slug}}" title="{{ $item->name}}" >
                                <img src="{{ $item->image}}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="caption text-center">
                            <a href="/sach/chi-tiet/{{$item->slug}}" data-toggle="tooltip" title="{{ $item->name}}">{{ $item->name}}</a>
                        </div>
                    </div>
                    @endforeach                    
                </div>
            </div>
        </div>
    </section>