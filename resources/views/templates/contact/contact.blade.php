<div class="row form-contact">
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
    <form action="/lien-he/gui" method="POST"  enctype="multipart/form-data">
        <div class="col-md-6 form-group">
            <label for="fullname">Họ Tên</label>
            <span>*</span>
            <input class="form-control" type="text" maxlength="100" name="ten" placeholder="Nhập Họ Tên" data-toggle="tooltip" title="Nhập họ tên">
        </div>
        <div class="col-md-6 col-sm-6 form-group">
            <label for="fullname">Mã số sinh viên</label>
            <span>*</span>
            <input class="form-control" type="text" maxlength="100" name="mssv" placeholder="MSSV" data-toggle="tooltip" title="Nhập MSSV">
        </div>
        <div class="col-md-6 col-sm-6 form-group">
            <label for="fullname">Email</label>
            <span>*</span>
            <input class="form-control" type="text" maxlength="100" name="email" placeholder="Email" data-toggle="tooltip" title="Nhập Email">
        </div>
        <div class="col-md-6 col-sm-6 form-group">
            <label for="fullname">Số điện thoại</label>
            <span>*</span>
            <input class="form-control" type="text" maxlength="100" name="sdt" placeholder="SĐT" data-toggle="tooltip" title="Nhập Số điện thoại">
        </div>
        <div class="col-md-12 col-sm-12 form-group">
            <label for="comment">Nội dung:</label>
            <span>*</span>
            <textarea class="form-control" rows="5" id="comment" placeholder="Nhập nội dung" data-toggle="tooltip" title="Nhập nội dung" name="noidung"></textarea>
        </div>
        <div class="col-md-6 col-sm-12 form-group">
            <!-- <label for="upload" class="lb" name="lb" type="image" data-toggle="tooltip" title="Chọn file đính kèm">
                <i class="fa fa-paperclip"></i> Đính kèm
            </label>                                            
            <input style="" type='file' id="files" name="image" multiple="multiple" /> -->
            
                <label data-toggle="tooltip" title="Chọn file đính kèm" for="upload">
                     <i class="fa fa-paperclip"></i> Đính kèm
                </label>                                     
                <input id="upload" name='upload_cont_img' type="file" style="display:none;">
                <label id="file-name"></label>
           
        </div>
        <div class="col-md-6 col-sm-12">
            <button type="submit" class="btn" data-toggle="tooltip" title="Gửi">Gửi liên hệ</button>
        </div>
        {!!csrf_field()!!}
    </form>
</div>
