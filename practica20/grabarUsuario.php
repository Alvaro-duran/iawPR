<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir usuarios</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
</head>
<body>
<?php
if(isset($_POST["usuario"])){
    $mysqli=new mysqli("localhost","usuario","7654321","usuario");
    if(!$mysqli->connect_errno){
    $sql="INSERT INTO usuarios VALUES (?)";
        $st=$mysqli->prepare($sql);
        $st->bind_param("s",$_POST["usuario"]);
        $st->execute();
        if(!$mysqli->errno){
            echo "<p>Se añadieron correctamente los datos</p>";
        }
        else if($mysqli->errno==1062){
            echo "<p style='color:red'>Ese usuario ya existe</p>";
        }

    }
}


?>
</body>
</html>
