@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
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
                        <th class="text-center">Image</th>
                        <th class="text-center">Loại</th>
                        <th class="text-center">Ghi chú</th>                        
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($slide as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td> 
                            <p>
                                <img width="50%" src="{{$item->image}}" alt="" class="img-responsive">
                            </p>
                        </td>
                        
                        <td> 
                            @if($item->type==1){{"Header"}}
                            @elseif($item->type==2){{"Home"}}
                            @elseif($item->type==3){{"Faculty"}}
                            @else {{"Company"}}
                            @endif()           
                        </td>
                        <td>{{$item->text}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/slide/xoa/{{$item->id}}">Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/slide/sua/{{$item->id}}">Sửa</a></td>
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