@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sách
                        <small>Thêm sách mới</small>
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
            <!-- /.col-lg-12 -->
                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="admin/sach/them" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Chọn loại sách</label>
                            <select class="form-control" name="loaisach">                              
                                    @foreach($loaisach as $ls)
                                     <option value="{{$ls->id}}" >{{$ls->category_name}}</option>
                                    @endforeach                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên sách</label>
                            <input class="form-control" name="ten" placeholder="Nhập tên" />
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <input class="form-control" name="tomtat" placeholder="Nội dung tóm tắt" />
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input class="form-control" name="anh" type="file" placeholder="Chọn ảnh" />
                        </div>
                        <div class="form-group">
                            <label>Nhà xuất bản</label>
                            <input class="form-control" name="nxb" placeholder="Nhà xuất bản" />
                        </div>
                         <div class="form-group">
                            <label>Năm xuất bản</label>
                            <input class="form-control" name="namxuatban" placeholder="Năm xuất bản" />
                        </div>
                        <div class="form-group">
                            <label>Tác giả</label>
                            <input class="form-control" name="tacgia" placeholder="Tác giả" />
                        </div>
                        <div class="form-group">
                            <label>Số trang</label>
                            <input class="form-control" name="sotrang" placeholder="Số trang" />
                        </div>
                       <div class="form-group">
                            <label>Ngôn ngữ</label>
                            <input class="form-control" name="lang" placeholder="Ngôn ngữ" />
                        </div>
                        <div class="form-group">
                            <label>size</label>
                            <input class="form-control" name="size" placeholder="Nhập kích thước" />
                        </div>
                        {!!csrf_field()!!}
                        <div class="text-center"><button type="submit" class="btn btn-primary">Thêm</button>
                        <button type="reset" class="btn btn-default">Reset</button></div>
                        
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop