 <div class="book-content-wp">
    <div class="container">
        <div class="row book-content">
           
            {{-- @include('templates.books.books-category_name') --}}
            <?php $n = 0 ?>
            @foreach($books as $item)
            @if($item !=null)
           <?php 

           $n++?>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="/sach/chi-tiet/{{$item->slug}}" title="">
                        <img src="{{asset($item->image)}}" alt="" class="img-responsive">
                    </a>
                    
                </div>
                <div class="caption text-center">
                        <a href="/sach/chi-tiet/{{$item->slug}}">{{ $item->name}}</a>
                    </div>
            </div>
            @endif
            @endforeach
            @if($n ==0)
            <div class="text-success text-center" style="font-size:30px;">Sách đang được cập nhật..</div>
            @endif

        </div>
    </div>
</div>