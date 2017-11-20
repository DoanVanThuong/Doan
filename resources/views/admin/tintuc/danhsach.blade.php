@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>Danh sách</small>
                </h1>
            </div>
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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">  
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Tác giả</th>
                        {{-- <th>Ngày</th> --}}
                        <th>Tóm tắt</th>
                        <th>slug</th>
                        <th>Tên loại</th>                   
                        <th>Delete</th>
                        <th>Edit</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($tintuc as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}
                            <img src="{{asset($item->image)}}" alt="" class="img-responsive">
                        </td>
                        <td>{{$item->author}}</td>
                        {{-- <td>{{$item->created_at}}</td> --}}
                        <td>{!!$item->sumary!!}</td>
                        <td>{{$item->slug}}</td>
                        <td>{{$item->loaitin->name}}</td>                   
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tintuc/xoa/{{$item->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/sua/{{$item->id}}">Sửa</a></td>
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