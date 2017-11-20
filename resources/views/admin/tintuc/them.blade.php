@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin Tức
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
                    <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Loại tin</label>
                            <select class="form-control" name="loaitin">
                                @foreach($loaitin as $item)                  
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="tieude" placeholder="Nhập tiêu đề" />
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" name="anh" value="" placeholder="Chọn ảnh" class="form-control">
                            

                        </div>
                        <div class="form-group">
                            <label for="">Tóm tắt</label>
                            <textarea name="tomtat" id="demo" class="form-control ckeditor" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">nội dung</label>
                            <textarea name="noidung" id="demo" class="form-control ckeditor" rows="3"></textarea>
                            {{-- <script>
                                CKEDITOR.replace('demo');
                            </script> --}}
                        </div>
                        <div class="form-group">
                            <label>Tác giả</label>
                            <input class="form-control" name="tacgia" placeholder="Nhập tiêu đề" />
                        </div>
                        {{-- <div class="form-group">
                            <label>ngày</label>
                            <input class="form-control" type="date" name="date" placeholder="Nhập ngày" />
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        {!!csrf_field()!!}
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop
