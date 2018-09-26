 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">
                    <a href="#">{{$thread->creator->name}}</a> Posted &nbsp;
                    {{$thread->title}}
                </div>

                <div class="card-body">
                    {{$thread->body}}
                  
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach($thread->replies as $reply)
                @include('threads.reply')
            @endforeach
              <hr>
                    <a  class="btn btn-outline-secondary btn-sm" href="{{ route('threads') }}"> Go Back</a>
        </div>

    </div>
</div>
@endsection 
