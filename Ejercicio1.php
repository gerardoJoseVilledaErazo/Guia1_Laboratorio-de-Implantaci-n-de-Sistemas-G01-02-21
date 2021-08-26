<html>
<head>
<title>Ejercicio1 - guia1</title>
<style>
table, th, td {
  border: 1px solid black;
}th, td {
  padding: 10px;
}
</style>
</head>
<body>
<form method="POST" action="procesoEjercicio1.php" autocomplete="on" >
<table style="background-color:#00FF00">
  <tr>
    <td>Ingrese su nombre:</td>
    <td><input type="text" name="nombre" placeholder="Edson" required autofocus ></td>
  </tr>
  <tr>
    <td>Ingrese su apellido:</td>
    <td><input type="text" name="apellido" placeholder="Aranter" required ></td>
  </tr>
  <tr>
    <td>Ingrese su usuario:</td>
    <td><input type="text" name="usuario" placeholder="Pele" required ></td>
  </tr>
  <tr>
    <td><label for="pwd">Ingrese su contraseña:</label></td>
    <td><input type="password" id="pwd" name="pwd" required ></td>
  </tr>
  <tr>
    <th><input type="submit" value="Enviar"></th>     
    <th><input type="reset" value="Limpiar"></th>         
  </tr>
</table>
</form>
</body>
</html>