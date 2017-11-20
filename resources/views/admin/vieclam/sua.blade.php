@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa Tin tuyển dụng
                        <small>{{$vieclam->name}}</small>
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
                    <form action="admin/vieclam/sua/{{$vieclam->id}}" method="POST" enctype="multipart/form-data">                        
                        <div class="form-group">
                            <label>Tên công việc</label>
                            <input class="form-control" name="ten" value="{{$vieclam->name}}" />
                        </div>
                        <div class="form-group">
                            <label>Công ty</label>
                            <input class="form-control" name="congty" value="{{$vieclam->company}}" />
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="diachi" value="{{$vieclam->address}}" />
                        </div>
                        <div class="form-group">
                            <label>Lương</label>
                            <input class="form-control" name="luong" value="{{$vieclam->salary}}" />
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <p>
                                <img src="{{$vieclam->image}}" alt="" class="img-responsive">
                            </p>
                            <input class="form-control" type="file"  name="anh" />
                        </div>
                        <div class="form-group">
                            <label>Loại công việc</label>
                            <input class="form-control" name="loaicv" value="{{$vieclam->type}}" />
                        </div>
                        <div class="form-group">
                            <label>Năm</label>
                            <input class="form-control" name="nam" value="{{$vieclam->year}}" />
                        </div>
                        <div class="form-group">
                            <label>ngày bắt đầu</label>
                            <input class="form-control" type="date" name="ngaybatdau" value="{{$vieclam->startdate}}" />
                        </div>
                        <div class="form-group">
                            <label>ngày kết thúc</label>
                            <input class="form-control" type="date" name="ngayketthuc" value="{{$vieclam->enddate}}" />
                        </div>
                        <div class="form-group">
                            <label>Tag</label>
                            <input class="form-control" name="tag" value="{{$vieclam->tag}}" />
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu chi tiết</label>
                            <textarea name="noidung" class="form-control ckeditor" id="demo" >{{$vieclam->content}}</textarea>                            
                        </div>
                        {!!csrf_field()!!}
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Sửa</button>
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