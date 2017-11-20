   @if(Auth::user())
<div class="change-password">
    <div class="content-title">Đổi mật khẩu</div>
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
        @else
        
    @endif()
    {{--  --}}
    <form action="/sinh-vien/sua/{{Auth::user()->id}}" method="POST">
        <div class="form-group">
            <label for="password">Password cũ:</label>
            <span>*</span>
            <input type="password" name="password" class="form-control" id="email" placeholder="vd:123456" data-toggle="tooltip" title="Nhập password cũ" >
        </div>
        <div class="form-group">
            <label for="pwd">Password mới:</label>
            <span>*</span>
            <input type="password" name="Newpassword" class="form-control" id="pwd" placeholder="nhập password mới" data-toggle="tooltip" title="Nhập password mới">
        </div>
        <div class="form-group">
            <label for="pwd">Xác nhận password mới:</label>
            <span>*</span>
            <input type="password"  name="NewpasswordAgain" class="form-control" id="pwd" placeholder="xác nhận password mới" data-toggle="tooltip" title="nhập lại password mới">
        </div>
        <div class="form-group col-md-7">
            <button type="submit" class="btn btn-primary text-center">Đổi mật khẩu</button>
        </div>
        <div class="form-group col-md-5">
            <button type="reset" class="btn btn-default text-center">Hủy</button>
        </div>

        {!!csrf_field()!!}
    </form>
</div>
@endif