{{-- job-detail --}}
<div class="col-md-4">
    <div class="thumb">
        <img src="{{asset($data->image)}}" class="img-responsive" alt="">
    </div>
    <p class="company">{{$data->company}}</p>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your share button code -->
   <div class="fb-share-button" data-href="http" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fut-edu.esy.es%2Fstudent%2Fket-qua-giai-quyet-don-xoa-diem-hki&amp;src=sdkpreparse">&nbsp;&nbsp;Share </a></div>
</div>
<div class="col-md-8">
    <div class="detail-job-wp">
        <div class="detail-job-title">{{$data->name}}</div>
        <ul class="list-inline job-tag">         
            <li>{{$data->tag}}</li>
            
        </ul>
        <p><i -113.977500class="fa fa-money"></i>&nbsp; {{$data->salary}}</p>
        <p><i class="fa fa-map-marker"></i>&nbsp; {{{$data->address}}}</p>
        <p><i class="fa fa-calendar"></i>&nbsp; {{$data->enddate - $data->startdate}} ngày Về trước</p>
        <button type="button" class="btn  btn-danger btn-block">Ứng tuyển ngay</button>
        <div class="description">
           {!!$data->content!!}
       </div>
        <button type="button" class="btn  btn-danger btn-block">Ứng tuyển ngay</button>
    </div>                                
</div>
