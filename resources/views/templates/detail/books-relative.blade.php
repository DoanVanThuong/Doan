<section class="footer-content">
    <div class="footer-content-title">
        <h2>Sách cùng nhóm</h2>
    </div>
   <div class="book-relative-wp">
        <?php 
         $n=0;
        ?>  
        @foreach($cat as $item)
            @if($item->id !=$data->id) 
        <?php 
            $n++;   
        ?>            
        <div class="book-relative-item">
          <a href="/sach/chi-tiet/{{$item->slug}}">
            <img src="{{asset($item->image)}}" alt="" class="img-responsive"> 
            <div class="caption text-center">
              <a href="/sach/chi-tiet/{{$item->slug}}"> {{$item->name}}</a>              
            </div>
          </a>          
        </div>               
         @endif              
        @endforeach
        @if($n == 0)              
          <h2 class="text-primary">Không tìm thấy sách cùng loại</h2>
        @endif
   </div>
</section>