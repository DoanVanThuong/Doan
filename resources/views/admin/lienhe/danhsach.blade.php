@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Liên hệ
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
                        <th class="text-center">id</th>

                        <th class="text-center">Mã số sinh viên</th>
                        <th class="text-center">Tên</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">SĐT</th>
                        <th class="text-center">Nội dung</th>
                        <th class="text-center">Ảnh</th>

                        <th class="text-center">Ngày gửi</th>
                        <th class="text-center">Xóa</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach($lienhe as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->mssv}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->content}}</td>
                        <td>{{$item->file}}</td>
                        
               
                       
                        <td>{{$item->created_at}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/lienhe/xoa/{{$item->id}}"> Xóa</a></td>
                        
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