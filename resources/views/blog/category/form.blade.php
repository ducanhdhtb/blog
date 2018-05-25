@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-3">
            @if(Session::has('flash'))<span id="id"><u>{{ Session::get('flash') }}@endif</u>
				<form action="{{ route('save_category') }}" method="POST" role="form">
					{{ csrf_field()}}
                    <input type="hidden" name="id" value="<?php if (isset($category)) {
                        echo $category['id'];
                    } ?>"/>
					<legend>Form Add Category</legend>
				
					<div class="form-group">
						<label for="">Category</label>
						<input type="text" value="<?php if (isset($category)) {
                            echo $category['name'];
                        } ?>" class="form-control" id="" value="" name="name">
						<legend>Slug</legend>
						<input type="text" name="slug" class="form-controll">
					</div>								
					<button type="submit" class="btn btn-primary" class="form-control">Submit</button><hr>	
				</form>
				<a href="" class="btn btn-danger">Back</a>
        </div>
    </div>
@endsection