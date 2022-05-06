<?php
    session_start();
    $_SESSION['mod'] = filter_input(0,"usuarios");
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center"><br>
    <h1>Modificar usuarios</h1>
    <form action="control.php" method="post">
        Usuario: <input type="text" name="usuario"><br>
        Tipo: <select name="tipo" id="1">
            <option value="1">Usuario</option>
            <option value="2">Administrador</option>
        </select><br>
        Contraseña: <input type="password" name="contra1" ><br>
        Contraseña: <input type="password" name="contra2" ><br>
        <input type="submit" value="Modificar">
    </form>
</body>
</html>