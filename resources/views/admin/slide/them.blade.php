@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slide
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
                    <form action="admin/slide/them" method="POST" enctype="multipart/form-data">                                             
                        <div class="form-group">
                            <label>Loại slide</label>                            
                            <select name="loaislide" class="form-control">
                                <option value="0">Chọn lĩnh loại slide</option>
                                <option value="1">Header</option>
                                <option value="2">Home(1349x423px)</option>
                                <option value="3">Faculty</option>
                                <option value="4">Company</option>                     
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ghi chú</label>
                            <input class="form-control" name="text" type="text" placeholder="Ghi chú..." />
                        </div>                                             
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input class="form-control" name="anh"  type="file" />
                        </div> 
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Thêm</button>
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