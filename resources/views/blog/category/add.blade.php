@extends('../layouts.app')

@section('content')
	<form>
	<div class="container">
		<div class="form-group">
    <label for="exampleInputEmail1">Category title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category title!" name="title">
    <small id="emailHelp" class="form-text text-muted">We'll never hope.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

	</div>
  

</form>
@endsection