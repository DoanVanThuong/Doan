 <?php $id=Auth::id();?>
<div class="col-sm-2 text-center">
    
    <img src="{{asset($image->image)}}" class="img-circle" height="65" width="65" alt="Avatar">
    
</div>
<div class="col-sm-10">
    <h4><small style="color:red;font-size:18px"> {{Auth::user()->name}}</small>                
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
