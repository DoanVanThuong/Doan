<div class="row comment">
    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" placeholder="Nhập comment" id="comment"></textarea>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </div>
				
    <div class="row list-comment">
        <div class="col-sm-2 text-center">
            <img src="{{asset('img/1.png')}}" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
            <h4>Đoàn Văn Thương <small>Sep 29, 2015, 9:12 PM</small></h4>
            <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul class="list-inline like-reply-wp">
                <li>
                    <a href="javascript:void(0) " class="like">Like</a>
                </li>
                <li>
                    <a href="javascript:void(0) " class="reply">Reply</a>
                </li>
                <li>
                    <span>
                        <i class="fa fa-heart heart"></i>&nbsp;
                        <span class="num-like">0</span>
                    </span>
                </li>
                <div class="form-group reply-form">
                    <textarea class="form-control" rows="5" placeholder="Nhập comment" id="comment"></textarea>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
            </ul>
            <br>
        </div>
        <div class="col-sm-2 text-center">
            <img src="{{asset('img/2.png')}}" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
            <h4>Tạ Minh Cát<small>Sep 25, 2015, 8:25 PM</small></h4>
            <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <br>
            <ul class="list-inline like-reply-wp">
                <li>
                    <a href="javascript:void(0) " class="like">Like</a>
                </li>
                <li>
                    <a href="javascript:void(0) " class="reply">Reply</a>
                </li>
                <li>
                    <span class="num-like-wp">
                        <i class="fa fa-heart heart"></i>&nbsp;
                        <span class="num-like">0</span>
                    </span>
                </li>
            </ul>
            <p><span class="badge">1</span> Comment:</p>
            <br>
            <!-- list reply -->
            <div class="row list-reply">
                <div class="col-sm-2 text-center">
                    <img src="{{asset('img/3.png')}} class="img-circle" height="65" width="65" alt="Avatar">
                </div>
                <div class="col-xs-10">
                    <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
                    <p>Me too! WOW!</p>
                    <br>
                </div>
                <div class="form-group reply-reply-form">
                    <textarea class="form-control" rows="5" placeholder="Nhập comment" id="comment"></textarea>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
            </div>
            <!-- end list -reply -->
        </div>			        
    </div>
</div>