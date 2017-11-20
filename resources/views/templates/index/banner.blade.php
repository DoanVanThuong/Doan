<!-- template.index.banner -->
<section class=" banner-page">
    <!-- <div class="container"> -->
    <div class="slider-wp">
        @foreach($slide_banner as $item)
        <div class="slider-content">
            <img src="{{$item->image}}" alt="" class="img-responsive">
        </div>
        @endforeach()
       
    </div>
    <!-- </div>   -->
</section>

<!-- end template.index.banner -->