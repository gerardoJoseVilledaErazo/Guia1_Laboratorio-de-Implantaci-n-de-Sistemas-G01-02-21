<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Proceso Ejercicio3</title>
</head>
<body>
<?php
//Captura de datos del form
$R1 = $_REQUEST['R1'];
$R2 = $_REQUEST['R2'];
$R3 = $_REQUEST['R3'];
$RP = 1/((1/$R1)+(1/$R2)+(1/$R3));
$RS = $R1+$R2+$R3;
echo "El valor global de la resistencia formada por estas tres resistencias si están conectadas en paralelo: R = 1/(1/R1)+(1/R2)+(1/R3) es:";
echo "<br>";
echo $RP;
echo "&nbsp";
echo "Ohmios";
echo "<br>";
echo "El valor global de la resistencia formada por estas tres resistencias si están conectadas en serie: R = R1+R2+R3 es:";
echo "<br>";
echo $RS;
echo "&nbsp";
echo "Ohmios";
echo "<br>";
?>
<input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
</body>
</html>