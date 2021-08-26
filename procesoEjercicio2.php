<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Proceso Ejercicio2</title>
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
echo "El sexo del usuario ingresado es: ";
echo "<br>";
echo $_REQUEST['sexo'];
echo "<br>";
echo "País de origen: ";
echo "<br>";
echo $_REQUEST['pais'];
echo "<br>";
echo "Pasatiempos del usuario: ";
echo "<br>";
echo $_REQUEST['pasatiempo1'];
echo "&nbsp";
echo $_REQUEST['pasatiempo2'];
echo "<br>";
echo "Las obsrvaciones son:";
echo "<br>";
echo $_REQUEST['observaciones'];
echo "<br>";
?>
</body>
</html>