@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tuyển dụng
                    <small>Danh sách</small>
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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                   
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Công ty</th>
                        <th>Loại</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày hết hạn</th>
                        <th>Địa chỉ</th>
                        <th>tag</th>
                        <th>Lương</th>
                        <th>slug</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($vieclam as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}
                            <img width="50%" src="{{$item->image}}" alt="">
                        </td>
                        <td>{{$item->company}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->startdate}}</td>
                        <td>{{$item->enddate}}</td>
                        <td>{{$item->address}}</td>
                        <td class="text-primary">{{$item->tag}}</td>
                        <td>{{$item->salary}}</td>  
                        <td class="text-primary">{{$item->slug}}</td>   

                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/vieclam/xoa/{{$item->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/vieclam/sua/{{$item->id}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop