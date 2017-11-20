@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sinh viên
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
                        <th class="text-center">MSSV</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Giới tính</th>
                        <th class="text-center">Ngày sinh</th>
                        <th class="text-center">Lớp</th>
                        <th class="text-center">Khóa</th>
                        <th class="text-center">Ngành</th>
                        <th class="text-center">Loại đào tạo</th>
                        {{-- <th class="text-center">SĐT</th>
                        <th class="text-center">Email</th> --}}
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($sinhvien as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}
                            <p>
                                <img width="40%" src="{{$item->image}}" alt="" class="img-responsive">
                            </p>
                        </td>
                        <td>{{$item->sex}}</td>
                        <td>{{$item->birth}}</td>
                        <td>{{$item->class}}</td>
                        <td>{{$item->year}}</td>
                        <td>{{$item->study}}</td>
                        <td>{{$item->type}}</td>
                            {{-- <td>{{$item->phone}}</td>
                            <td>{{$item->email}}</td> --}}
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sinhvien/xoa/{{$item->id}}">Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sinhvien/sua/{{$item->id}}">Sửa</a></td>
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