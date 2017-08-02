@extends('layouts.app')
@section('content')
<div class="row">
<div class="container">
	<center><h1>Data Buku</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Buku
	<div class="panel-title pull-right">
	<a href="{{URL::previous()}}">Kembali</a></div>
	</div>

	<div class="panel-body">
	<form action="{{route('book.show', $book->id)}}"  method="post"enctype="multipart/form-data">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		<label class="control-lable">Title</label>
			<input type="text" name="a" value="{{$book->title}}" class="form-control" readonly="" >
		</div>
		<div class="form-group">
			<label class="control-lable">Nama Author</label>
			<input type="text" name="b" value="{{$book->author->name}} " class="form-control" readonly="" >

		<div class="form-group">
			<label class="control-lable">Amounth</label>
			<input type="number" name="c" value="{{$book->amounth}}" class="form-control" readonly="">
		</div>
		
		<div class="form-group">
		<div class="form-group">
			<label class="control-lable">cover</label>
			<img src="{{asset('img/'.$book->cover.'')}}" height="70" width="70" readonly=""> 
		</div>
		</div>

		
		
	</form>
	</div>
	</div>
	</div>
	</div>
@endsection
