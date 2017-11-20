<div class="container">
	<div class="header-detail">
		 <h3 class="book-title">{{$data->name}}</h3>
		 <p class="author">- {{$data->author}}</p>
	</div>
	<div class="row content-detail">
		<div class="col-md-3 col-sm-3">
			<div class="book-img">
				<img src="{{asset($data->image)}}" class="img-responsive" alt="">
			</div>
			<div class="book-caption">
				{{$data->name}}
			</div>
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="content-detail-wp">
				<p class="publishing-company"><label>Nhà xuất bản:&nbsp;</label>{{$data->company}}</p>
				<p class="author"><label>Tác giả:&nbsp;</label>{{$data->author}}</p>
				<p class="publishing-year"><label>Năm xuất bản:&nbsp;</label>{{$data->year}}</p>
                <p class="type"><label>Thể loại:&nbsp;</label><a href="/sach/{{$cate->slug}}">{{$name}}</a></p>

				<p class="sumary">
					<label>Tóm Tắt:	</label>
					{{$data->sumary}}
				</p>
				<p class="page-number"><label>Số trang:&nbsp;</label>{{$data->page}}</p>
				<p class="book-language"><label>Ngôn ngữ:&nbsp;</label>{{$data->lang}}</p>
				<p class="book-size"><label>Kích thước:&nbsp;</label>{{$data->size}}</p>
                <button type="submit" class="btn btn-info">
                    <a href="javascript:void(0) " title="">Download</a>
                </button>

			</div>
		</div>
	</div>
</div>