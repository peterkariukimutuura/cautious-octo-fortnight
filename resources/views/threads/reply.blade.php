<div class="card">
    <div class="card-header text-info">
        <a href="#">{{$reply->owner->name}}</a> &nbsp; &nbsp;
        said 
     <small>{{$reply->created_at->diffForHumans()}} ...</small>
    </div>
    <div class="card-body">
        {{$reply->body}}
        <hr>
    </div>
</div>