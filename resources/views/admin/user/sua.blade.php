@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa User
                        <small>@if($user->id ==5)Super Admin @else{{$user->name}}@endif</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
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
                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="admin/user/sua/{{$user->id}}" method="POST">
                        <div class="form-group">
                            <label>Phân quyền</label>
                            <select class="form-control" name="role">                                
                                    @if($user->role ==1)
                                        <option 
                                            {{"Selected"}}
                                            value="{{$user->role}}">Admin</option>                     
                                        <option value="0">Guest</option>
                                    @else                                
                                <option 
                                    {{"Selected"}}
                                value="{{$user->role}}">Guest</option>
                                <option value="1">admin</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên user</label>
                            <input class="form-control" name="ten" value="{{$user->name}}" />
                        </div>
                        <div class="form-group">
                            <label>Mã số đăng nhập</label>
                            <input class="form-control" name="mssv" value="{{$user->mssv}}">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input class="form-control user-password" type="password" id="" name="password" value="{{$user->password}}" />
                        </div>
                        <div class="form-group">
                            <label>Xác nhận lại Mật khẩu</label>
                            <input class="form-control re-password" type="password" id="" name="re-password" value="{{$user->password}}" />
                        </div>
                                     
                        {!!csrf_field()!!}
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                        
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop

@section('script') 
<script>

     $(".user-password").change(function(){
                $(".re-password").val('');
            
            $(".user-password").mouseout(function(){
                $(".re-password").val('');
            })
        });
</script>
 


@stop