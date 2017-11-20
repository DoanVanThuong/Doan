@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{$cuusinhvien->name}}
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
                    <form action="admin/cuusinhvien/sua/{{$cuusinhvien->id}}" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label>Tên cựu viên</label>
                            <input class="form-control" name="ten" value="{{$cuusinhvien->name}}" />                           
                            
                        </div>
                        <div class="form-group">
                            <label>lĩnh vực công tác</label>                            
                            <select name="linhvuc" class="form-control">
                               @if($cuusinhvien->business == 1)
                                <option 
                                    {{"selected"}}
                                    value="{{$cuusinhvien->business}}">Giáo dục
                                    
                                </option>
                                <option value="2">Lập trình</option>
                                <option value="4">Du học</option>
                                <option value="3">Kinh doanh</option>
                                @elseif($cuusinhvien->business ==2)
                                    <option 
                                    {{"selected"}}
                                    value="{{$cuusinhvien->business}}">Lập trình viên
                                    
                                </option>
                                <option value="1">Giáo dục</option>
                                <option value="3">Kinh doanh</option>                     
                                <option value="4">Du học</option>
                                @elseif($cuusinhvien->business ==3)
                                    <option 
                                    {{"selected"}}
                                    value="{{$cuusinhvien->business}}">Kinh doanh
                                    
                                </option>
                                <option value="1">Giáo dục</option>
                                <option value="2">Lập trình viên</option>
                                <option value="4">Du học</option>
                                @else 
                                <option 
                                    {{"selected"}}
                                    value="{{$cuusinhvien->business}}">Du học
                                    
                                </option>
                                <option value="1">Giáo dục</option>
                                <option value="2">Lập trình viên</option>
                                <option value="3">Kinh doanh</option>
                                @endif           
                            </select>
                        </div>                        
                        <div class="form-group">
                            <label>Thông tin</label>
                            <textarea name="thongtin" class="form-control ckeditor" >{{$cuusinhvien->info}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>hình ảnh</label>
                            <input class="form-control" name="anh" value="{{$cuusinhvien->image}}" type="file" />
                            <span class="danger" style="color:red">{{$cuusinhvien->image}}</span>
                            <img src="{{$cuusinhvien->image}}" class="img-responsive" alt="">
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