<!-- template.study.teacher-list -->
<section id="teacher-list">
    <div class="banner-study study-teacher">
        <h2 class="banner-study-title"  data-ix="float-in-on-scroll">Danh Sách giảng viên</h2>
    </div>
    <div class="container" data-ix="float-in-on-scroll-2">
        <div class="row teacher-list-wp" >
            @foreach($v_teacher as $item)
            <div class="col-md-3">
                <div class="thumb ">
                    <img src="{{$item ->image}}" alt="" class="img-responsive">                    
                </div>
                <label>{{$item->name}}</label>
                    <ul class="list-unstyled">
                        <li>Chức danh: {{$item ->alias}}</li>
                        <li>Học vị: {{$item ->degree}}</li>
                        <li>{{$item ->subject}}</li>
                        <li>Địa chỉ Email:<span>{{$item ->email}}</span> </li>
                    </ul>
            </div>
            @endforeach       
        </div>
    </div>
</section>
<!--end  template.study.teacher-list -->
