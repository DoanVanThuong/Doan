<section class="language-programing" data-ix="float-in-on-load">
    <div class="books-banner language">
        <div class="books-banner-wp">
            <h2 class="books-title">Ngôn ngữ lập trình </h2>
            <hr class="hr-news">
            <ul class="list-inline books-list" data-ix="float-in-on-scroll">

                <li><a href="/sach/{{$cate[0]->slug}}" title="">C/C++</a></li>
                <li><a href="/sach/{{$cate[1]->slug}} " title="">C#</a></li>
                <li><a href="/sach/{{$cate[3]->slug}}" title="">Java</a></li>
                <li><a href="/sach/{{$cate[5]->slug}}" title="">SQL</a></li>
                <li><a href="javascript:void(0) " title="">Ngôn ngữ khác</a></li>
            </ul>
        </div>
    </div>
    <div class="book-content-wp" data-ix="float-in-on-scroll-2">
        <div class="container">
            <div class="row book-content">                    
                @foreach($l_book_lang as $item)
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