<!--History and FAQs -->
<section class="history-faqs">
    <div class="banner-study study-award">
        <h2 class="banner-study-title" data-ix="float-in-on-scroll">Bảng vàng thành tích sinh viên</h2>
    </div>
    <div class="container" data-ix="float-in-on-load">
        <div class="row" id="history-faqs-wp">
            <div class="col-md-6 col-sm-6 col-xs-12" data-ix="float-in-on-scroll">
                <h2 class="history-title about-title">CÁC GIẢI THƯỞNG CẤP QUỐC GIA, BỘ, THÀNH PHỐ CỦA SINH VIÊN</h2>
                <hr class="hr-news">
                <!-- timeline -->
                <ul class="timeline list-unstyled " id="history-tl" >
                    @foreach($thanhtich as $item)
                    <li class="entry clearfix">
                        <div class="arrow_box">{{$item->year}}<span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">{!!$item->name!!}</span> &nbsp;&nbsp;&nbsp;
                            <span>{{$item->gain}}</span>
                            <p>{{$item->competition}}</p>
                        </div>
                    </li>
                    @endforeach
                    {{-- <li class="entry">
                        <div class="arrow_box">
                            2016
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Hồ Trí Dũng<br>Ưng Kiến Hữu</span>
                            <span>Giải Khuyến Khích</span>
                            <p>Tài năng khoa học trẻ Việt Nam - 2016</p>
                        </div>
                    </li>
                    <li class="entry" >
                        <div class="arrow_box">
                            2015
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Lê Hoàng Chương <br>Trần Thành Long 	</span> &nbsp;&nbsp;&nbsp;
                            <span>PURE LIMESTONE</span> 
                            <p>Đạt giải cao nhất cuộc thi lập trình ứng dụng đa nền tảng thuộc Trung Tâm Đào tạo Khu Công Nghệ Cao Tp.HCM tháng 04/2015 </p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2014
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Đoàn Nguyễn Đăng Khoa <br>Trần Thành Long</span> &nbsp;&nbsp;&nbsp;
                            <span>Giải nhì</span>
                            <p>“Tài năng Khoa học trẻ Việt Nam năm 2014”, cấp Bộ, ngày 15/11/2014 tại Hà Nội (giải cao nhất)</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2013
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Chung Vĩnh Khang <br>Nguyễn Duy Phượng </span> &nbsp;&nbsp;&nbsp;
                            <span>Khuyến khích</span>
                            <p>Tài năng Khoa học trẻ Việt Nam năm 2014” - cấp Bộ</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2013
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Lê Hoàng Chương </span> &nbsp;&nbsp;&nbsp;
                            <span>Giải khuyến khích</span>
                            <p>Olympic Tin học Quốc Gia</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2012
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Đinh Hoàng Dâng <br>Phạm Minh Trí <br>Trần Hữu Tâm <br> Nguyễn Ngọc Mãn </span> &nbsp;&nbsp;&nbsp;
                            <span>Giải Ba</span>
                            <p>Tài năng Khoa học trẻ Việt Nam năm 2014” - cấp Bộ</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2012
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Chung Vĩnh Khang </span> &nbsp;&nbsp;&nbsp;
                            <span>khuyến khích</span>
                            <p>Olympic Tin học Quốc Gia</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2012
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Nguyễn Văn Trường <br> Giáo viên hướng dẫn: TS. Lê Xuân Trường </span> &nbsp;&nbsp;&nbsp;
                            <span>Luận văn xuất xắc</span>
                            <p>Đạt giải Euréka 2012 (cấp thành phố), đạt giải luận văn xuất sắc cấp thành phố</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2011
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Nguyễn Văn Thâu</span> &nbsp;&nbsp;&nbsp;
                            <span>Giải Ba </span>
                            <p>Olympic Tin học Quốc Gia</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2011
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Chung Vĩnh Khang </span> &nbsp;&nbsp;&nbsp;
                            <span>khuyến khích</span>
                            <p>Olympic Tin học Quốc Gia</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2010
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Bùi Bảo Anh</span> &nbsp;&nbsp;&nbsp;
                            <span>Giải 3 cá nhân </span>
                            <p>Olympic Tin học Quốc Gia</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2010
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Dương Bính Cường</span> &nbsp;&nbsp;&nbsp;
                            <p>Giải khuyến khích Eureka</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2009
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Nguyễn Đình Khôi Nguyên</span> &nbsp;&nbsp;&nbsp;
                            <span>Giải 3 cá nhân </span>
                            <p>Olympic Tin học Quốc Gia</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2009
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Lê Hoàng Sơn</span> &nbsp;&nbsp;&nbsp;
                            <p>Giải Tiếng anh Tin học</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2008
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Trần Đức Hiếu</span> &nbsp;&nbsp;&nbsp;
                            <span>Giải 2 cá nhân </span>
                            <p>Olympic Tin học Quốc Gia</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2008
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Đinh Đông Khoa</span> &nbsp;&nbsp;&nbsp;
                            <span>Giải 3 cá nhân </span>
                            <p>Olympic Tin học Quốc Gia</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2004
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Hồ Long Đỉnh</span> &nbsp;&nbsp;&nbsp;
                            <span>Giải 2&3 cá nhân </span>
                            <p>Olympic Tin học Quốc Gia</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="arrow_box">
                            2003
                            <span class="circle"></span>
                        </div>
                        <div class="body-entry">
                            <span class="history-title">Nguyễn Ngọc Tuấn</span> &nbsp;&nbsp;&nbsp;
                            <span>Giải khuyến khích</span>
                            <p>Olympic Tin học Quốc Gia</p>
                        </div>
                    </li> --}}
                </ul>
                <!-- end timeline -->
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" data-ix="float-in-on-scroll-2">
                <h2 class="history-title about-title">TẤM GƯƠNG CỰU SINH VIÊN THÀNH ĐẠT</h2>
                <hr class="hr-news">
                <table class="table table-striped " style="width: 100%">
                    <thead>
                        <tr>
                            <th>Lãnh vực công tác</th>
                            <th>Thông tin cựu sinh viên khoa CNTT </th>
                            <th>Hình ảnh cựu sinh viên</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cuusinhvien as $item)
                        <tr>
                            <td rowspan="2">
                                @if($item->business==1){{"Giáo dục"}}
                                @elseif($item->business==2){{"Lập trình viên"}}
                                @elseif($item->business==3){{"Kinh doanh"}}
                                @else {{"Du học"}}
                                @endif()          
                            </td>
                            <td>
                                <label>{{$item->name}}</label>
                                <ul>
                                    {!!$item->info!!}
                                </ul>
                            </td>
                            <td><img src="{{$item->image}}" class="img-responsive" alt=""></td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--end History and FAQs