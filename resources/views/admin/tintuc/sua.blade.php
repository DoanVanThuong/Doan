@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa
                        <small>{{$tintuc->name}}</small>
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
                    <form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Loại tin</label>                            
                            <select class="form-control" name="loaitin">
                                @foreach($loaitin as $item)
                                               
                                    <option 
                                     @if($tintuc->loaitin->id == $item->id)
                                        {{"selected"}}

                                    @endif     
                                    value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="tieude" placeholder="Nhập tiêu đề" value="{{$tintuc->name}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <p>
                                <img src="{{$tintuc->image}}" alt="" class="img-responsive">
                            </p>
                            <label for="file" style="color:red">
                            {{$tintuc->image}}
                                
                            </label>
                            <input type="file" name="anh" value="" placeholder="Chọn ảnh" class="form-control">
                            

                        </div>
                        <div class="form-group">
                            <label for="">Tóm tắt</label>
                            <textarea name="tomtat" id="demo" class="form-control ckeditor" rows="3" >
                                {!!$tintuc->sumary!!}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">nội dung</label>
                            <textarea name="noidung" id="demo" class="form-control ckeditor" rows="3" >
                                {!!$tintuc->content!!}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Tác giả</label>
                            <input class="form-control" name="tacgia" placeholder="Nhập tiêu đề" value="{{$tintuc->author}}"/>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                            <button type="reset" class="btn btn-default">làm mới</button>
                        </div>                     
                        
                        {!!csrf_field()!!}
                    <form>
                </div>
            </div>
            <!-- /.row edit-->
            <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bình luận
                    <small>Danh sách</small>
                </h1>
            </div>
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
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">  
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Người dùng</th>
                        <th>Nội dung</th>
                        <th>Ngày comment</th>                                         
                        <th>Delete</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach($comment as $cm)
                    <tr class="odd gradeX" align="center">
                        <td>{{$cm->id}}</td>
                        <td>{{$cm->name}} 
                            <img width="20%" src="{{$cm->image}}" alt="" class="img-responsive">
                        </td>
                        <td>{{$cm->content}}</td>
                        <td>{{$cm->created_at}}</td>                                       
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/{{$cm->id}}"> Xóa</a></td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row comment-->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop
