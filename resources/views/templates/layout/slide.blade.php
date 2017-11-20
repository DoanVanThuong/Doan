<div class=" slider-header-top clearfix">
        @foreach($slide_header as $item)
        <div class="thumbnail">
            <img src="{{asset($item->image)}}" alt="" class="img-responsive">
        </div>
        @endforeach()
</div>