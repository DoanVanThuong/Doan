 <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- template.layout.header-top -->
<section class="header-top">
    <a href="/index">
        <img src="{{asset('img/logo/logo2.png')}}" alt="" id="logo2" class="logo-top img-responsive">
    </a>
    @include('templates.layout.slide')
    </div>
</section>
<!-- end template.layout.header-top -->
<!-- template.layout.header -->
<header id="header" class="header clearfix">
    <nav class="navbar navbar-default navbar-cntt">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('img/logo/logo.png')}}" alt="" class="logo img-responsive">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="{{ ($curr == 'index') ? 'active' : '' }}">
                    <a href="/"><span><i class="fa fa-home"></i></span> &nbsp;Trang Chủ</a>
                </li>
                <li class="{{ ($curr == 'about') ? 'active' : '' }}">
                    <a href="/gioi-thieu" title="">Giới Thiệu</a>
                </li>
                <li class="{{ ($curr == 'news') ? 'active' : '' }}">
                    <a href="/tin-tuc" title="">Tin Tức</a>
                </li>
                <li class="{{ ($curr == 'study') ? 'active' : '' }}"><a href="/dao-tao">Đào Tạo</a></li>
                <li class="{{ ($curr == 'books' ) ? 'active' : '' }}"><a href="/sach">Tài liệu học tập</a></li>
                <li class="{{ ($curr == 'jobs' )? 'active' : '' }}"><a href="/tuyen-dung">Tuyển dụng</a></li>
                <li class="{{ ($curr == 'contact' )? 'active' : '' }}"><a href="/lien-he">Liên hệ</a></li>
                <!-- <li><a href="#">Chương Trình Đào Tạo</a></li> -->
                <li id="search-btn" class="{{ ($curr == 'search' )? 'active' : '' }}">
                    <a href="javascript:void(0) ">Tìm Kiếm</a>
                </li>
                <li>
                    {!!csrf_field()!!}
                    <form action="/timkiem" method="post " accept-charset="utf-8">                     
                        <div class="search-box">
                            <input type="search" name="keyword" class="search" placeholder="Tìm Kiếm..." >
                            <button type="submit" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div> 
                    </form> 

                </li>
               
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::user())
                    <li class="dropdown">
                        <a href="javascript:void(0) "  class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-log-in"></span>&nbsp;
                        @if(Auth::id() ==5)
                        Super Admin
                        @else
                        {{Auth::user()->name}}
                        @endif
                        <span class="caret"></span></button>
                            <ul class="dropdown-menu list-unstyled"  >      
                                <li >
                                    @if(Auth::user()->role ==0)

                                    <a href="/sinh-vien/{{Auth::user()->id}}"><span class="fa fa-user" aria-hidden="true"></span>&nbsp;Thông tin sinh viên</a>
                                    @else 
                                    <a href="/admin/tintuc/danhsach"><span class="fa fa-dashboard fa-fw" aria-hidden="true"></span>&nbsp;Vào trang quản trị</a>
                                    @endif
                                </li>
                                <li ><a href="/dang-xuat"><span class="fa fa-power-off" aria-hidden="true"></span>&nbsp;Thoát quyền sử dụng</a></li>    
                            </ul>
                        </a>
                    </li>
                @else
                <li><a href="/dang-nhap" ><span class="glyphicon glyphicon-log-in"></span>&nbsp; &nbsp;Đăng nhập</a></li>
                @endif

            </ul>
        </div>
    </nav>
</header>
<!-- end template.layout.header -->