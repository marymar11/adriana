<html>
<head>
<title>Datos del producto</title>
</head>
<body>
<?php
include("conexion2.php");
$m=$_POST['matricula'];
$n=$_POST['nombre'];
$ap=$_POST['apellidosp'];
$am=$_POST['apellidosm'];
$d=$_POST['direccion'];
$t=$_POST['telefono'];
$s=$_POST['sexo'];
$di=$_POST['Dia'];
$me=$_POST['Mes'];
$y=$_POST['Year'];

echo "<fieldset>";
echo "<legend>DATOS DEL ALUMNO</legend>";
echo "MATRICULA: ". $m . "<p>";
echo "NOMBRE: ". $n. "<p>";
echo "APELLIDO PATERNO: ". $ap . "<p>";
echo "APELLIDO MATERNO: ". $am . "<p>";
echo "DIRECCION: ". $d . "<p>";
echo "TELEFONO: ". $t. "<p>";
echo "SEXO: ". $s . "<p>";
echo "DIA: ". $di . "<p>";
echo "MES: ". $me . "<p>";
echo "YEAR: ". $y . "<p>";

echo "</fieldset>";
			$link=Conectarse();
			$sql="INSERT INTO alumnos(MATRICULA, NOMBRE, APELLIDO_PATERNO , APELLIDO_MATERNO , DIRECCION , TELEFONO , SEXO , DIA , MES, YEAR) VALUES('$m', '$n', '$ap', '$am' , '$d' , '$t' , '$s' , '$di', '$me' , '$y')";
			$result=mysqli_query($link, $sql);
			echo "<p> LA INFORMACION A SIDO GUARDADA EN LA BASE DE DATOS";
			mysqli_close ($link);
?>
</body>
</html>