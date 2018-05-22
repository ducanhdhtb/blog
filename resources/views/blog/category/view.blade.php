@extends('../layouts.app')

@section('content')
<div class="container">
	Thinking in your way! @@
	<?php foreach ($posts as $key => $value): ?>
		<ul>
			<li><a href="/post/view/{{ $value['id'] }}">{{ $value['title'] }}</a></li>			
		</ul>
	<?php endforeach ?>
	
</div>
@endsection