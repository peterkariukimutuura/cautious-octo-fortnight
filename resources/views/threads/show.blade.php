 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$thread->title}}</div>

                <div class="card-body">
                    {{$thread->body}}
                  
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach($thread->replies as $reply)
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
            @endforeach
              <hr>
                    <a  class="btn btn-outline-secondary btn-sm" href="{{ route('threads') }}"> Go Back</a>
        </div>

    </div>
</div>
@endsection 
