@extends('layouts.app')
@section('content')

<div class="row">
<div class="container">
	<center><h1>Data Author</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Author
	<div class="panel-title pull-right">
	<a href="/author/create">Tambah Data	</a></div>
		
	</div>

	<div class="panel-body">
	<table class="table">
		<thead>
			<tr>
				<th>Nama </th>
				<th>Nama Buku</th>
				<th colspan="3">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($author as $data)
			<tr>
			<td>{{$data->name}}</td>
			<td>
				@foreach($data->book as $a)
				<li>{{$a->title}}</li>
				@endforeach
			</td>
			<td>
				<a class="btn btn-warning" href="author/{{$data->id}}/edit">Edit</a>
				<td>
					<a class="btn btn-primary" href="author/{{$data->id}}">Show</a>
				</td>
				<td>
					<form action="{{route('author.destroy', $data->id )}}" method="post">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" >
						<input class="btn btn-danger" type="submit" value="Delete" >
						{{csrf_field()}}
					</form>
				</td>
			</td>
			</tr>
			@endforeach
		</tbody>
	</table>	
	</div>
	</div>
</div>
</div>
@endsection