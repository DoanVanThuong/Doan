@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại tin
                    <small>{{$loaitin->name}}</small>
               
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">

                <form action="admin/loaitin/sua/{{$loaitin->id}}" method="POST">  
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
                    <div class="form-group">
                        <label>Tên loại tin</label>
                        <input class="form-control" name="tenloai" placeholder="Nhập loại tin" value="{{$loaitin->name}}" />
                    </div> 

                    <button type="submit" class="btn btn-primary">Sửa</button>
                    <button type="  " class="btn btn-default">Làm mới</button>
                    {!!csrf_field()!!}
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop
