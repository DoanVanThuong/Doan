@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{$sinhvien->name}}
                        <small>Sửa</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                    {{-- hàm hiển thị lỗi --}}
                        @if( count($errors) > 0 )
                            <div class="alert alert-danger">
                                @foreach($errors ->all() as $item)
                                {{ $item }} <br>
                                @endforeach
                            </div>
                        @endif
                        @if( session('thongbao') )
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
                        @endif()
                    {{--  --}}   
                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="admin/sinhvien/sua/{{$sinhvien->id}}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Chọn Mã User</label>
                            <select name="user_id" class="form-control">
                                <option selected="" value="{{$sinhvien->user_id}}">{{$sinhvien->user_id}}</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mã số sinh viên</label>
                            <input class="form-control" name="mssv" value="{{$sinhvien->id}}" />
                        </div>
                        <div class="form-group">
                            <label>Tên sinh viên</label>
                            <input class="form-control" name="ten" value="{{$sinhvien->name}}" />
                        </div>                        
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <img src="{{$sinhvien->image}}" alt="{{$sinhvien->name}}" class="img-responsive">
                            <input class="form-control" name="anh" type="file" value="" />
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select name="gioitinh" class="form-control">
                               
                                <option @if($sinhvien->sex =="Nam") {{"Selected"}} @endif value="0">Nam</option>
                                <option @if($sinhvien->sex =="Nữ") {{"Selected"}} @endif value="1">Nữ</option>
                               

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input class="form-control" type="date" name="ngaysinh" value="{{$sinhvien->birth}}"  />
                        </div>
                        <div class="form-group">
                            <label>Lớp</label>
                            <input class="form-control" name="lop" value="{{$sinhvien->class}}" />
                        </div>
                        <div class="form-group">
                            <label>Khóa</label>
                            <input class="form-control" name="nam" value="{{$sinhvien->year}}" />
                        </div>                        
                        <div class="form-group">
                            <label>Ngành</label>
                            <input class="form-control" name="nganh" value="{{$sinhvien->study}}" />
                        </div>
                        <div class="form-group">
                            <label>Loại đào tạo</label>
                            <input class="form-control" name="loaidaotao" value="{{$sinhvien->type}}" />
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" name="sdt" value="{{$sinhvien->phone}}" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" value="{{$sinhvien->email}}" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>                        
                        {!!csrf_field()!!}
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop