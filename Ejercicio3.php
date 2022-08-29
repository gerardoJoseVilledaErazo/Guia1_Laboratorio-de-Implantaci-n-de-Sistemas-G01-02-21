<html>
<head>
<title>Ejercicio3 - guia1</title>
<style>
table, th, td {
  border: 1px solid black;
}th, td {
  padding: 10px;
}
</style>
</head>
<body>
<h2>Ejercicio 3. Solicitar los valores de 3 resistencias eléctricas (en Ohmios, W) y muestre el valor global
de la resistencia formada por estas tres resistencias si:</h2>
<form method="POST" action="procesoEjercicio3.php" autocomplete="on" >
<table style="background-color:#00FF00">
  <tr>
    <td>Ingrese su resistencia 1:</td>
    <td><input type="number" name="R1" placeholder="Ohmios" required autofocus ></td>
  </tr>
  <tr>
    <td>Ingrese su resistencia 2:</td>
    <td><input type="number" name="R2" placeholder="Ohmios" required ></td>
  </tr>
  <tr>
    <td>Ingrese su resistencia 3:</td>
    <td><input type="number" name="R3" placeholder="Ohmios" required ></td>
  </tr>
  <tr>
    <th><input type="submit" value="Enviar"></th>     
    <th><input type="reset" value="Limpiar"></th>         
  </tr>
</table>
</form>
</body>
</html>