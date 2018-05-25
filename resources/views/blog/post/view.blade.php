@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">{{$post['title']}}</h3>
            </div>

            <div class="panel-body">
                {{$post['summary']}}
            </div>
            <div class="panel-body">
                {{$post['content']}}
            </div>
        </div>

    </div>

@endsection