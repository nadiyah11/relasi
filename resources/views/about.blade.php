<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
		@foreach($ortu as $data)<hr>
		Nama ibu 	: {{ $data ->nama_ibu }}<br>
		Nama Ayah 	: {{ $data ->nama_ayah }}<br>
		Umur Ibu 	: {{ $data ->umur_ibu }}<br>
		Umur Ayah 	: {{ $data ->umur_ayah }}<br>
		Alamat 		: {{ $data ->alamat }}<br>
		Nama anak  	:
		@foreach ($data->anak as $key) 
    		<li>{{ $key->nama}}</li><br>
    	
		@endforeach 

		@endforeach <hr>
		
		
</body>
</html>