@extends('../layouts.app')

@section('content')
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">{{$posts ['title']}}</h3>
		</div>

		<div class="panel-body">
			{{$posts['summary']}}
		</div>
		<div class="panel-body">
			{{$posts['content']}}
		</div>
	</div>

</div>

@endsection