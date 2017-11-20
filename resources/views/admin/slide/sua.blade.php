@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slide
                        <small>Sửa</small>
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
                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="admin/slide/sua/{{$slide->id}}" method="POST" enctype="multipart/form-data">                                             
                        <div class="form-group">
                            <label>Loại slide</label>                            
                            <select name="loaislide" class="form-control">
                                @if($slide->type ==1)
                                    <option                                    
                                        {{"selected"}}                                    
                                        value="{{$slide->type}}">Header
                                        
                                    </option>
                                    <option value="2">Home(1349x423px)</option>
                                    <option value="3">Faculty</option>
                                    <option value="4">Company</option> 
                                    @elseif($slide->type ==2)
                                    <option                                    
                                        {{"selected"}}                                    
                                        value="{{$slide->type}}">Home(1349x423px)                                        
                                    </option>
                                    <option value="1">Header</option>
                                    <option value="3">Faculty</option>
                                    <option value="4">Company</option>
                                    @elseif($slide->type ==3)
                                    <option                                    
                                        {{"selected"}}                                    
                                        value="{{$slide->type}}">Faculty                                        
                                    </option>
                                    <option value="1">Header</option>
                                    <option value="2">Home(1349x423px)</option>
                                    <option value="4">Company</option>
                                    @else
                                     <option                                    
                                        {{"selected"}}                                    
                                        value="{{$slide->type}}">Company                                        
                                    </option>
                                    <option value="1">Header</option>
                                    <option value="2">Home(1349x423px)</option>
                                    <option value="3">Faculty</option>
                                @endif
                                                  
                            </select>
                        </div>                                              
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <img src="{{$slide->image}}" alt="" class="img-responsive">
                            <input class="form-control" name="anh"  type="file" />
                        </div> 
                        <div class="form-group">
                            <label>Ghi chú</label>
                            <input class="form-control" name="text" type="text" value="{{$slide->text}}" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>                       
                        
                        {!!csrf_field()!!}
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop