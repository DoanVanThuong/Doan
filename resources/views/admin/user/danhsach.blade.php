<?php 
$id = Auth::id();
// echo $id;
?>
@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users
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
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Mã số đăng nhập</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Delete</th>                        
                        <th class="text-center">Edit</th>                        

                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $item)
                    <tr class="odd gradeX" align="center"  @if($id == 5 && $item->name =="admin")style="font-size:19px;"@endif>
                        <td  @if($id == 5 && $item->name =="admin")class="text-danger"@endif>{{$item->id}}</td>
                        <td @if($id == 5 && $item->name =="admin")class="text-danger"@endif>{{$item->name}}</td>                                       
                        <td @if($id == 5 && $item->name =="admin")class="text-danger"@endif>{{$item->mssv}}</td>
                        <td  @if($id == 5 && $item->name =="admin")class="text-danger"@endif>
                        @if($item->name =="admin" ) 
                                Super Admin

                            @elseif($item->role ==1)
                                Admin
                                
                                @else
                                    Sinh viên
                            @endif
                        </td>
                        {{-- nếu đăng nhập bằng super admin thì có thể thêm xóa sửa mọi user --}}
                        @if($id==5) 
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$item->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{$item->id}}">Sửa</a></td>
                        {{-- nếu đăng nhập bằng admin thường thì có thể thêm xóa sửa mọi user trừ các user admin --}}
                        @elseif($item->role==1)
                        <td class="center "><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$item->id}}"> </a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{$item->id}}"></a></td>                       
                        
                        @else
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$item->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{$item->id}}">Sửa</a></td>
                        @endif
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