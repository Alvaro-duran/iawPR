<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Resumen</title>
    <style>
        .error{
            color:red;
        }
        p{
            margin:0;
        }
    </style>
</head>
<body>
<?php
    if($_GET){
        echo "<h1>Resumen de datos</h1>";
        foreach($_GET as $i=>$v){
            eval ("\$$i=\"$v\";");
        }
        if(isset($dni)) echo "<p><strong>DNI</strong>: $dni</p>";
        else echo "<p class='error'>Falta DNI</p>";
        if(isset($nombre)) echo "<p><strong>Nombre</strong>: $nombre</p>";
        else echo "<p class='error'>Falta el Nombre</p>";
        if(isset($apellidos)) echo "<p><strong>Apellidos</strong>: $apellidos</p>";
        else echo "<p class='error'>Faltan los apellidos</p>";
        if(isset($fecha)) echo "<p><strong>Fecha de nacimiento:</strong>: $fecha</p>";
        if(isset($comunidad)) echo "<p><strong>Comunidad autónoma:</strong>: $comunidad</p>";
        if(isset($tipo)) echo "<p><strong>Tipo de institución:</strong>: $tipo</p>";
        if(isset($nombreinst)) echo "<p><strong>Nombre de la institución:</strong>: $nombreinst</p>";
        if(isset($dirinst)) echo "<p><strong>Dirección de la institución:</strong>: $dirinst</p>";
    }
?>
</body>
</html>