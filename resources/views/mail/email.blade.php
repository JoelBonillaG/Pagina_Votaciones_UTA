<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <h1>
        Gracias por tu apoyo!
    </h1>
    <p>
        Agradecemos mucho tu apoyo {{ $voter->nom_vot }} {{ $voter->ape_vot }}
        <br>
        Tu propuesta de {{ $sugestion }} es muy importante para nostros
    </p>
    <h2>
        Vota por nuestra lista e infórmate más en <a href="{{ route('home') }}">nuestra página</a>
    </h2>
</body>
</html>