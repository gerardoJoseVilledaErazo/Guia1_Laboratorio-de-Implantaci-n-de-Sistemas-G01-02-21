<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Proceso Ejercicio1</title>
</head>
<body>
<?php
//Captura de datos del form
echo "El nombre ingresado es: ";
echo "<br>";
echo $_REQUEST['nombre'];
echo "<br>";
echo "El apellido ingresado es: ";
echo "<br>";
echo $_REQUEST['apellido'];
echo "<br>";
echo "El usuario ingresado es: ";
echo "<br>";
echo $_REQUEST['usuario'];
echo "<br>";
echo "La contraseña no se mostrará por seguridad";
?>
</body>
</html>