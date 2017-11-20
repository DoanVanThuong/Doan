@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User
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
                    <form action="admin/user/them" method="POST">
                        <div class="form-group">
                            <label>Phân quyền</label>
                            <select class="form-control" name="role">
                                <option value="-1">Chọn quyền cho user này</option>
                                <option value="0">Sinh viên</option>
                                <option value="1">admin</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên user</label>
                            <input class="form-control" name="ten" placeholder="Nhập tên của user" />
                        </div>
                        <div class="form-group">
                            <label>Mã số đăng nhập</label>
                            <input class="form-control" name="mssv" placeholder="Nhập mã số đăng nhập" />
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input class="form-control user-password" type="password" name="password" id="" placeholder="Nhập mật khẩu" />
                        </div>
                        <div class="form-group">
                            <label>Xác nhận lại mật khẩu</label>
                            <input class="form-control re-password"  type="password" name="re-password" id="" placeholder="Nhập mật khẩu" />
                        </div>
                        {!!csrf_field()!!}
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>                            
                        </div>

                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop

@section('script') 
<script>
     $(".user-password").change(function(){
            $(".re-password").val(' ');
        });
</script>
 


@stop