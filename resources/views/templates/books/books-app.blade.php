<section class="app-programing" data-ix="float-in-on-scroll">
        <div class="books-banner app">
            <div class="books-banner-wp">
                <h2 class="books-title">Lập Trình ứng dụng</h2>
                <hr class="hr-news">
                <ul class="list-inline books-list">
                    <li><a href="/sach/{{$cate[2]->slug}}" title="">Winform</a></li>
                    <li><a href="/sach/{{$cate[4]->slug}}" title="">WPF</a></li>
                    <li><a href="/sach/{{$cate[3]->slug}}" title="">Java</a></li>
                    <li><a href="/sach/{{$cate[5]->slug}}" title="">SQL</a></li>
                    <li><a href="javascript:void(0)" title="">Ngôn ngữ khác</a></li>
                </ul>
            </div>
        </div>
        <div class="book-content-wp">
            <div class="container">
                <div class="row book-content">                    
                    @foreach($a_book_app as $item)
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail text-center">
                            <a href="sach/chi-tiet/{{$item->slug}}" title="{{ $item->name}}" >
                                <img src="{{ $item->image}}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="caption text-center">
                            <a href="sach/chi-tiet/{{$item->slug}} " data-toggle="tooltip" title="{{ $item->name}}">{{ $item->name}}</a>
                        </div>
                    </div>
                    @endforeach                    
                </div>
            </div>
        </div>
    </section>