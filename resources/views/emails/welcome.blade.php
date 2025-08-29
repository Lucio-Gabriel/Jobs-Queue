<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Seja bem vindo {{ $user->name }}</h2>

    <p>Você confirma que seu E-mail é: {{ $user->email }}</p>
</body>
</html>
