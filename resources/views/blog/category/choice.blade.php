@extends('layouts.app')

@section('content')
    <div class="container">
        <p>This is the post belongs to category </p>
        @foreach ($post as $p)
            <ul>
                <li><a href="/view/{{ $p->id }}/{{ str_slug($p->title) }}.html">{{ $p -> title }}</a>.</li>
            </ul>
        @endforeach
    </div>
@endsection