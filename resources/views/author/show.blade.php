@extends('layouts.app')
@section('content')
<div class="row">
<div class="container">
	<center><h1>Data Author</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Author
	<div class="panel-title pull-right">
	<a href="{{URL::previous()}}">Kembali</a></div>
	</div>

	<div class="panel-body">
	<form action="{{route('author.show', $author->id)}}"  metauthorhod="post">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
		<label class="control-lable">Nama</label>
			<input type="text" name="a" value="{{$author->name}}" class="form-control" readonly="">
		</div>
		
		
	</form>
	</div>
	</div>
	</div>
	</div>
@endsection
