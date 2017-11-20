@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa
                        <small>{{$sach->name}}</small>
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
                    <form action="admin/sach/sua/{{$sach->id}}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Chọn loại sách</label>
                            <select name="loaisach" class="form-control">
                                 @foreach($loaisach as $ls)                                                                                            
                                    <option 
                                     @if($sach->category_id == $ls->id)
                                        {{"selected"}}
                                    @endif     
                                    value="{{$ls->id}}">{{$ls->category_name}}</option>
                                @endforeach
                            </select>   
                            
                        </div>
                        <div class="form-group">
                            <label>Tên sách</label>
                            <input class="form-control" name="ten" value="{{$sach->name}}" />
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <input class="form-control" name="tomtat" value="{{$sach->sumary}}" />
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <p>
                            <img src="{{$sach->image}}" alt="">
                                
                            </p>
                            <input class="form-control" name="anh" type="file" placeholder="Chọn ảnh mới" />
                        </div>
                        <div class="form-group">
                            <label>Nhà xuất bản</label>
                            <input class="form-control" name="nxb" value="{{$sach->company}}" />
                        </div>
                         <div class="form-group">
                            <label>Năm xuất bản</label>
                            <input class="form-control" name="namxuatban" value="{{$sach->year}}" />
                        </div>
                        <div class="form-group">
                            <label>Tác giả</label>
                            <input class="form-control" name="tacgia" value="{{$sach->author}}" />
                        </div>
                        <div class="form-group">
                            <label>Số trang</label>
                            <input class="form-control" name="sotrang" value="{{$sach->page}}" />
                        </div>
                       <div class="form-group">
                            <label>Ngôn ngữ</label>
                            <input class="form-control" name="lang" value="{{$sach->lang}}" />
                        </div>
                        <div class="form-group">
                            <label>size</label>
                            <input class="form-control" name="size" value="{{$sach->size}}" />
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