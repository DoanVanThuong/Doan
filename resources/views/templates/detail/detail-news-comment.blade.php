<?php $id_user = Auth::id();?>
{{-- dùng ajax --}}
<div class="row comment">
    @if(Auth::user())
    <div class="form-group" {{-- action="/comment/{{$data->id}}" method="POST " --}} data-id="{{Auth::id()}}" data-news="{{$id}}">
        <label for="comment">Bình luận <span class="text-danger">*</span></label>
        <textarea class="form-control" rows="5" placeholder="Nhập bình luận tại đây..." name="comment" id="comment"></textarea>
            <button type="submit" id="btn-comment" class="btn btn-primary">Gửi</button>
            <meta name="token" content="{{csrf_token()}}">   
    </div>   
    @else
    <div class="form-group">
        <label for="comment">Bình luận</label>
        <textarea class="form-control" rows="5" placeholder="Nhập bình luận"></textarea>          
            <button data-toggle="modal" data-target="#modal-login" class="btn btn-primary ">Gửi</button>              
    </div>
    @endif
    <div class="row list-comment">
        @foreach($comment as $item)       
        <div class="col-sm-2 text-center">
            <img src="{{asset($item->image)}}" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
            <h4>
                @if(Auth::user())
                    @if($item->name == Auth::user()->name)
                    <a href="/sinh-vien/{{$item->user_id}}"><small style="color:red;font-size:18px"> {{$item->name}}</small></a>
                    @else <a href="/sinh-vien/{{$item->user_id}}">{{$item->name}}</a>

                    @endif
                @else
                    <a href="/sinh-vien/{{$item->user_id}}">{{$item->name}}</a>
                @endif
                <small>&nbsp;{{$item->created_at}}</small></h4>
            <p>{{$item->content}}</p>
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
                
            </ul>
            <br>
        </div>
        @endforeach           
    </div>
</div>


