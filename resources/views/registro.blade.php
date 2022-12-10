<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario UPT - Crear cuenta</title>
    <link rel="stylesheet" href="{{ asset('css/register.css')}}">
</head>
<body>

    <form action="process.php" method="POST">
        <h1>Crear cuenta</h1>
        <input type="text" name="user" id="" placeholder="Introduce tu nombre de usuario:">
        <input type="email" name="email" id="" placeholder="Introduce tu correo:">
        <input type="password" name="password" id="" placeholder="Introduce tu contraseña:">
        <input type="password" name="cpassword" id="" placeholder="Confirma tu contraseña:">
        <button type="submit">Crear cuenta</button>
    </form>

</body>
</html>