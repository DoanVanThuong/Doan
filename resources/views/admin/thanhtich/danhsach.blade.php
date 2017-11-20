@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bảng vàng thành tích
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
                        <th class="text-center">Id</th>
                        <th class="text-center">Tên</th>
                        <th class="text-center">Cuộc thi</th>
                        <th class="text-center">Thành tích</th>
                        <th class="text-center">Năm</th>                        
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($thanhtich as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{!!$item->name!!} </td>                               
                        <td>{{$item->competition}}</td>
                        <td>{{$item->gain}}</td>
                        <td>{{$item->year}}</td>                          
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/thanhtich/xoa/{{$item->id}}">Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/thanhtich/sua/{{$item->id}}">Sửa</a></td>
                    </tr>
                    @endforeach()
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop