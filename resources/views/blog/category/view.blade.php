@extends('../layouts.app')

@section('content')
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">{{$category['id']}}</h3>
			</div>

			<div class="panel-body">
				{{$category['name']}}
			</div>
			<div class="panel-body">
				{{$category['description']}}
			</div>
		</div>
		<table class="table table-hover" >
				<thead>
				<tr>
					<th>Slogan</th>
					<th>@if(Session::has('flash3'))<span id="id">{{ Session::get('flash3') }}@endif	</span></th>
					<th></th>
					<th><u>@if(Session::has('flash4'))<span id="id">{{ Session::get('flash4') }}@endif</u></th>
					<th><a href="new" style="display: block;">Add a new post</a></th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td width="50px">Id</td>
					<td width="50px">Title</td>
					<td width="200px">Summary</td>
					<td>Content</td>
					<td>Status</td>
					<td>Edit Post</td>
					<td>Delete post</td>
				</tr>
                <?php
                foreach ($posts as $post) {?>
				<tr>
					<td width="50px"><?php echo $post['id'] ?></td>
					<td width="50px"><?php echo $post['title'] ?> </td>
					<td width="200px"> <?php echo  substr($post['summary'], 0, 100)?></td>
					<td> <?php echo  substr($post['content'], 0, 300)?> </td>
					<td>
						<a href="{{ route('postView', ['slug' => $post['slug']]) }}">Continue...</a>
					</td>
					<td><a href="{{ route('postView', ['id' => $post['id']]) }}" ><button type="button" class="btn btn-danger">Edit</button></a>	</td>
					<td><a href="{{ route('postView', ['id' => $post['id']]) }}"> <button type="button" class="btn btn-success">Delete</button> </a></td>

				</tr>
                <?php
                }
                ?>
				</tbody>

		</table>
	</div>

@endsection