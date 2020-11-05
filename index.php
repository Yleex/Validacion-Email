<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="post">
        <input type="text" placeholder="name" name="Nombre" require="">
        <input type="email" placeholder="email" name="E-mail" require="">
        <input type="text" placeholder="asunto" name="Asunto" require="">
        <textarea placeholder="mensaje" name="msg"></textarea>
        <input type="submit" name="enviar">
    </form>

    <?php
    include("correo.php");
    ?>

</body>
</html>