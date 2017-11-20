@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Giảng viên
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
                    <form action="admin/giangvien/them" method="POST" enctype="multipart/form-data">
                        {!!csrf_field()!!}

                        <div class="form-group">
                            <label>Tên giảng viên</label>
                            <input class="form-control" name="ten" placeholder="nhập tên giảng viên" />
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" name="anh" placeholder="Chọn ảnh" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Chức danh</label>
                            <input class="form-control" name="chucdanh" placeholder="nhập chức danh" />
                        </div>
                        <div class="form-group">
                            <label>Học vị</label>
                            <input class="form-control" name="hocvi" placeholder="nhập học vị" />
                        </div>
                        <div class="form-group">
                            <label>Vị trí công tác/ môn học phụ trách</label>
                            <input class="form-control" name="vitri" placeholder="nhập vị trí công tác/môn học phụ trách" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="email" placeholder="nhập vị trí công tác/môn học phụ trách" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Thêm giảng viên</button>
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