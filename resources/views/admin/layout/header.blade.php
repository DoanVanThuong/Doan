<?php 

$id = Auth::id();
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Trang quản trị - Khoa Công Nghệ Thông Tin</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            @if($id ==5)
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i><span> Xin chào Super-Admin</span>  <i class="fa fa-caret-down"></i>
            </a>
            @else
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i><span> Xin chào admin</span>  <i class="fa fa-caret-down"></i>
            </a>
            @endif
              @if(Auth::user())
            <ul class="dropdown-menu dropdown-user">
                <li><a href="admin/loaitin/danhsach"><i class="fa fa-user fa-fw"></i>@if($id ==5)SuperAdmin @else {{Auth::user()->name}} @endif</a>
                </li>
                @if(Auth::user()->id ==5)
                <li><a href="admin/user/sua/{{Auth::user()->id}}"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                @endif
                <li class="divider"></li>
                <li><a href="/"><i class="fa fa-sign-out fa-fw"></i> Về trang chủ</a>
                </li>
                <li><a href="admin/dang-xuat"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            @endif()
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
        
    @include('admin.layout.menu')
    <!-- /.navbar-static-side -->
</nav>