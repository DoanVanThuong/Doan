@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thông tin sinh viên
                        <small>Thêm</small>
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
                    <form action="admin/sinhvien/them" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Chọn Mã User</label>
                            <select class="form-control" name="user_id">
                                <option value="0"></option>                               
                                @foreach($user as $item)
                                <option value="{{$item->id}}">{{$item->id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mã số sinh viên</label>
                            <input class="form-control" name="mssv" placeholder="nhập tên" />
                        </div>
                        <div class="form-group">
                            <label>Tên sinh viên</label>
                            <input class="form-control" name="ten" placeholder="nhập tên" />
                        </div>                        
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input class="form-control" name="anh" type="file" placeholder="Chọn ảnh" />
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select name="gioitinh" class="form-control">
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input class="form-control" type="date" name="ngaysinh"  />
                        </div>
                        <div class="form-group">
                            <label>Lớp</label>
                            <input class="form-control" name="lop" placeholder="nhập lớp" />
                        </div>
                        <div class="form-group">
                            <label>Khóa</label>
                            <input class="form-control" name="nam" placeholder="ví dụ: 2014,2015" />
                        </div>                        
                        <div class="form-group">
                            <label>Ngành</label>
                            <input class="form-control" name="nganh" placeholder="nhập tên ngành" />
                        </div>
                        <div class="form-group">
                            <label>Loại đào tạo</label>
                            <input class="form-control" name="loaidaotao" placeholder="ví dụ: từ xa, chính quy" />
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" name="sdt" placeholder="nhập sđt" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" placeholder="nhập email" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Thêm</button>
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