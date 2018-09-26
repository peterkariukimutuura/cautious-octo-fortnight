<div class="card">
    <div class="card-header ">
        <a href="#">{{$reply->owner->name}}</a> &nbsp;
        said  &nbsp;
     <small>{{$reply->created_at->diffForHumans()}} ...</small>
    </div>
    <div class="card-body">
        {{$reply->body}}
        <hr>
    </div>
</div>