<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proceso de datos-Práctica 12</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
<h1>Datos recibidos:</h1>
<?php
	if($_POST){
		foreach($_POST as $i=>$v){
			$$i=$v;
		}
	}
	$mensajeError="";
	$datos="";
    if (!isset($nombre)){
        $mensajeError.="<li>No se ha enviado el nombre</li>";
    }
    else{
        $datos.="<li><strong>Nombre: </strong>$nombre</li>";
    }

    if (isset($apellidos)==false){
        $mensajeError.="<li>No se han enviado los Apellidos</li>";
    }
    else{
        $datos.="<li><strong>Apellidos: </strong>$apellidos</li>";
    }

    if (isset($contra)==false){
        $mensajeError.="<li>No se ha enviado la contraseña</li>";
    }
    else{
        $datos.="<li><strong>Contraseña: </strong>$contra</li>";
    }
    if (isset($etapa)==false){
        $mensajeError.="<li>No se ha enviado la Etapa educativa</li>";
    }
    else{
        $datos.="<li>Pago por la etapa educativa elegida: $etapa&euro;</li>";
    }

    $descuento=0;
    if (isset($numerosa)==false){
        $mensajeError.="<li>No es familia Numerosa</li>";
    }
    else{
        $descuento+=$numerosa;
        $datos.="<li>Familia numerosa (descuento=$numerosa%)</li>";
    }
    if (isset($discapacidad)==false){
        $mensajeError.="<li>No hay discapacidad</li>";
    }
    else{
        $descuento+=$discapacidad;
        $datos.="<li>Descuento por discapacidad (descuento=$discapacidad%)</li>";
    }
    if (isset($mayor)==false){
        $mensajeError.="<li>No es mayor de 30</li>";
    }
    else{
        $descuento+=$mayor;
        $datos.="<li>Descuento por mayor de 30 (descuento=$mayor%)</li>";
    }
    if($descuento)
        $datos.="<li>Descuento total $descuento%</li>";


echo "<h2>Datos recogidos</h2><ul>$datos</ul>";
echo "<h2>Datos que no han llegado</h2></p><ul class='error'>$mensajeError</ul>";
?>
</body>
</html>