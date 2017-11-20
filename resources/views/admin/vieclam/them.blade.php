@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin tuyển dụng
                        <small>Thêm mới</small>
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
                    <form action="admin/vieclam/them" method="POST" enctype="multipart/form-data">                        
                        <div class="form-group">
                            <label>Tên công việc</label>
                            <input class="form-control" name="ten" placeholder="nhập tên công việc" />
                        </div>
                        <div class="form-group">
                            <label>Công ty</label>
                            <input class="form-control" name="congty" placeholder="Nhập tên công ty" />
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="diachi" placeholder="Nhập địa chỉ công ty" />
                        </div>
                        <div class="form-group">
                            <label>Lương</label>
                            <input class="form-control" name="luong" placeholder="Nhập mức lương" />
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input class="form-control" type="file" name="anh" />
                        </div>
                        <div class="form-group">
                            <label>Loại công việc</label>
                            <input class="form-control" name="loaicv" placeholder="fulltime/parttime/thực tập" />
                        </div>
                        <div class="form-group">
                            <label>Năm</label>
                            <input class="form-control" name="nam" placeholder="nhập năm" />
                        </div>
                        <div class="form-group">
                            <label>ngày bắt đầu</label>
                            <input class="form-control" type="date" name="ngaybatdau" placeholder="nhập năm" />
                        </div>
                        <div class="form-group">
                            <label>ngày kết thúc</label>
                            <input class="form-control" type="date" name="ngayketthuc" placeholder="nhập năm" />
                        </div>
                        <div class="form-group">
                            <label>Tag</label>
                            <input class="form-control" name="tag" placeholder="nhập tag" />
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu chi tiết</label>
                            <textarea name="noidung" class="form-control ckeditor" id="demo"></textarea>                            
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