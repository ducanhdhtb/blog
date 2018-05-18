@extends('layouts.app')

@section('content')
<div class="container">
	<!DOCTYPE html>
<html lang="en">

<body>

<div class="container">
	<a href="new"  class="btn btn-success" >Add Category</a>
	
	
  @if(session('inform'))
  	<u class="text-center">{{ session('inform') }}</u>
  @endif          
  <table class="table table-bordered" style="border-color: black">
    <thead>
      <tr>
        <th style="background: green;color:black" >Category</th>
        <th style="background: green;color:black" >Edit</th>
        <th style="background: green;color:black" >Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($category as $val)
      <tr>
        <td ><span style="font-weight: bold;font-size: 15px">{{ $val['name'] }}</span></td>
        <td><a href="/category/edit/{{$val['id'] }}" class="btn btn-success">Edit</a></td>
        <td><a href="/category/delete/{{$val['id'] }}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
   
    </tbody>
  </table>
</div>

</body>
</html>
</div>
	
@endsection
