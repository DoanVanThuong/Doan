@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sách
                    <small>danh sách</small>
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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Nhà xuất bản</th>
                        <th>năm xuất bản</th>
                        <th>ngôn ngữ</th>
                        <th>kích cở</th>
                        <th>tên không dấu</th>
                        <th>Tên loại</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sach as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}
                            <img width="50%" src="{{$item->image}}" alt="" class="img-responsive">
                        </td>
                        <td>{{$item->company}}</td>
                        <td>{{$item->year}}</td>
                        <td>{{$item->lang}}</td>
                        <td>{{$item->size}}</td>
                        <td class="text-primary">{{$item->slug}}</td>
                        <td>{{$item->loaisach->category_name}}</td>                        
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sach/xoa/{{$item->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sach/sua/{{$item->id}}">Sửa</a></td>
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