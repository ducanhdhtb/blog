@extends('../layouts.app')

@section('content')
    <h2> {{$post['title']}}</h2>
    <hr>
    <h2> {{$post['summary']}}</h2>
    <hr>
    <h2> {{$post['content']}}</h2>
@endsection