<!DOCTYPE html>
<html>
<head>
	<title>Anak</title>
</head>
<body>
@foreach($anak as $data)<hr>
		Nama  		: {{ $data ->nama }}<br>
		ortu id 	: {{ $data ->ortu_id }}<br>
		umur 		: {{ $data ->umur }}<br>
		Alamat 		: {{ $data ->alamat }}<br><hr>
		@endforeach 
</body>
</html>