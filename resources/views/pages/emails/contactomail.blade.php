<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Maer</title>
</head>
<body>
	<p>{!! $mensaje !!}</p>
    <ul>
    	<br>
        <li>Nombre: {{ $nombre }}</li>
        <br>
        <li>Ciudad: {{ $ciudad }}</li>
        <br>
        <li>Telefono: {{ $telefono }}</li>
        <br>
        <li>Email: {!! $email !!}</li>
    </ul>
</body>
</html>
