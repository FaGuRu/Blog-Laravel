<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios - FaGuRu.net</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <hr>
    @if (! empty($users))
        <ul>
            @foreach ($users as $user)
                <li>{{$user}}</li>
            @endforeach
        </ul>
    @else
        <p>No hay usuarios registrados aun</p>
    @endif

</body>
</html>