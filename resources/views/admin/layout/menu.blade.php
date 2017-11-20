<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu" data-toggle="tooltip">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <li>
                <a href="/" title="Trang chủ"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Về trang chủ</a>
            </li>
           {{--  <li>
                <a href="/admin/loaitin/danhsach" title="Trang quản trị"><i class="fa fa-dashboard fa-fw"></i>&nbsp;Trang quản trị</a>
            </li> --}}
            <li>
                <a href="admin/loaitin/danhsach" title="Quản lý loại tin"><i class="fa fa-bar-chart-o fa-fw"></i> Loại Tin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/loaitin/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>Danh Sách Loại Tin</a>
                    </li>
                    <li>
                        <a href="/admin/loaitin/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;Thêm Loại Tin</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/tintuc/danhsach" title="Quản lý tin tức"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Tin Tức<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/tintuc/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>danh sách tin </a>
                    </li>
                    <li>
                        <a href="admin/tintuc/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;thêm tin mới</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/sach/danhsach" title="Quản lý tài liệu"><i class="fa fa-book" aria-hidden="true"></i> Sách<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/sach/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>Danh Sách Sách</a>
                    </li>
                    <li>
                        <a href="admin/sach/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;Thêm sách mới</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/vieclam/danhsach" title="Quản lý tuyển dụng"><i class="fa fa-binoculars" aria-hidden="true"></i>&nbsp;tuyển dụng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/vieclam/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>danh sách tin tuyển dụng</a>
                    </li>
                    <li>
                        <a href="admin/vieclam/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;Thêm tin tuyển dụng</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/giangvien/danhsach" title="Quản lý giảng viên"><i class="fa fa-user-md" aria-hidden="true"></i> Giảng viên<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/giangvien/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>danh sách giảng viên</a>
                    </li>
                    <li>
                        <a href="admin/giangvien/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;thêm giảng viên</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/user/danhsach"  title="Quản lý người dùng"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/user/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>danh sách user</a>
                    </li>
                    <li>
                        <a href="admin/user/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;thêm user</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/sinhvien/danhsach" title="Quản lý sinh viên"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;Sinh viên<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/sinhvien/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>danh sách sinh viên</a>
                    </li>
                    <li>
                        <a href="admin/sinhvien/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;Thêm sinh viên</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/lienhe/danhsach" title="Quản lý thông tin liên hệ"><i class="fa fa-inbox" aria-hidden="true"></i>&nbsp;Liên Hệ<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/lienhe/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>danh sách liên hệ</a>
                    </li>
                    
                </ul>
            </li>
            <li>
                <a href="admin/thanhtich/danhsach" title="Quản lý thông tin bảng vàng thành tích sinh viên"><i class="fa fa-trophy" aria-hidden="true"></i>&nbsp;Bảng vàng thành tích<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/thanhtich/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>Danh sách</a>
                    </li>
                    <li>
                        <a href="admin/thanhtich/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;Thêm bảng vàng thành tích</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/cuusinhvien/danhsach" title="Quản lý thông tin cựu sinh viên"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;Cựu sinh viên<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/cuusinhvien/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>Danh sách</a>
                    </li>
                    <li>
                        <a href="admin/cuusinhvien/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;Thêm thông tin cựu sinh viên</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/slide/danhsach" title="Quản lý thông tin cựu sinh viên"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;Slide<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/slide/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>Danh sách</a>
                    </li>
                    <li>
                        <a href="admin/slide/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;Thêm slide</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>   
</div>