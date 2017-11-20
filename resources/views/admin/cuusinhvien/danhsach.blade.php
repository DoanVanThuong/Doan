@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cựu sinh viên
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
                        <th class="text-center">Tên
                            
                        </th>
                        <th class="text-center">Thông tin</th>
                        <th class="text-center">Lĩnh vực công tác</th>
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cuusinhvien as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}} 
                            <p>
                                <img src="{{$item->image}}" alt="" class="img-responsive">
                            </p>
                        </td>
                        <td>{!!$item->info!!} </td> 
                        <td> 
                            @if($item->business==1){{"Giáo dục"}}
                            @elseif($item->business==2){{"Lập trình viên"}}
                            @elseif($item->business==3){{"Kinh doanh"}}
                            @else {{"Du học"}}
                            @endif()           
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/cuusinhvien/xoa/{{$item->id}}">Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/cuusinhvien/sua/{{$item->id}}">Sửa</a></td>
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