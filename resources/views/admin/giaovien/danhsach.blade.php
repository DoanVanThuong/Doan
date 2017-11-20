@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Giảng viên
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if( session('thongbao') )
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif()
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>                        
                        <th>Tên</th>
                        <th>Chức danh</th>
                        <th>Học vị</th>
                        <th>Vị trí công tác/ môn học phụ trách</th>
                        <th>Email</th>
                        <th>Delete</th>
                        <th>Edit</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($teacher as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>
                            {{$item->name}}
                            <p>
                                <img width="80%" src="{{$item->image}}" alt="" class="img-responsive">
                            </p>
                        </td>
                        <td>{{$item->alias}}</td>
                        <td>{{$item->degree}}</td>
                        <td>{{$item->subject}}</td>
                        <td class="text-primary">{{$item->email}}</td>

                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/giangvien/xoa/{{$item->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/giangvien/sua/{{$item->id}}">Sửa</a></td>
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