@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{$thanhtich->gain}}&nbsp;{{$thanhtich->competition}}
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
                    <form action="admin/thanhtich/sua/{{$thanhtich->id}}" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label>Tên sinh viên</label>
                            <textarea name="ten" class="form-control ckeditor" value="" >{{$thanhtich->name}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label>Thành tích đạt được </label>
                            <input class="form-control" name="thanhtich" value="{{$thanhtich->gain}}" />
                        </div>                        
                        <div class="form-group">
                            <label>Cuộc thi</label>
                            <input class="form-control" name="cuocthi"  value="{{$thanhtich->competition}}" />
                        </div>
                        <div class="form-group">
                            <label>Năm</label>
                            <input class="form-control" name="nam"  value="{{$thanhtich->year}}" />
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