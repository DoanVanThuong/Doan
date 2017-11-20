
<div class="row">
    <div class="news-title">Thông tin sinh viên</div>
    @if(Auth::user())
        <div class="col-md-4">
            <div class="info-student-wp text-center">
                <img src="{{asset($student->image)}}" class="img-responsive img-circle" alt="{{$student->name}}">
                <div id="mssv">{{$student->id}}</div>
                <div id="name">{{$student->name}}</div>
            </div>
        </div>
        <div class="col-md-8">
            <ul class="list-unstyled" id="list-info-student">
                <li>
                    <label>Mã sv: &nbsp;</label>
                    <span>{{$student->id}}</span>
                </li>
                <li>
                    <label>Họ tên: &nbsp;</label>
                    <span>{{$student->name}}</span>
                </li>
                <li>
                    <label>Giới tính: &nbsp;</label>
                    <span>{{$student->sex}}</span>
                </li>
                <li>
                    <label>Ngày sinh: &nbsp;</label>
                    <span>{{$student->birth}}</span>
                </li>
                <li>
                    <label>Lớp: &nbsp;</label>
                    <span>{{$student->class}}</span>
                </li>
                <li>
                    <label>khóa học: &nbsp;</label>
                    <span>{{$student->year}}</span>
                </li>
                <li>
                    <label>Khoa: &nbsp;</label>
                    <span>{{$student->study}}</span>
                </li>
                
                <li>
                    <label>hệ đào tạo: &nbsp;</label>
                    <span>{{$student->type}}</span>
                </li>
                <li>
                    <label>số đt: &nbsp;</label>
                    <span class="phone">{{$student->phone}}</span>
                </li>
                <li>
                    <label>Email: &nbsp;</label>
                    <span>{{$student->email}}</span>
                </li>
            </ul>
        </div>
        @else
        <div class="text-danger text-center" style="font-size:30px;font-family: 'Roboto-Light';"><span><i class="fa fa-frown-o" aria-hidden="true"></i></span>Vui lòng đăng nhập vào hệ thống!</div>
    @endif
</div>

