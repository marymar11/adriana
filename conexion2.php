<html>
	<head>
		<title>Conexion a base de datos</title>
	</head>	
		<body>
			<?php
			//Direccion o ip del servidor mysql
			$host="localhost";
			//Nombre del usurio del servidor mysql
			$usuario="root";
			//Contraseña del usuario
			$contrasena="";
			//Nombre de la base de datos
			$baseDeDatos="escuela"; 
			//Nombre de la tabla 
			$tabla="alumnos";
			function Conectarse(){
			global $host,$usuario,$contrasena,$baseDeDatos,$tabla;
			if(!($link=mysqli_connect($host,$usuario,$contrasena)))
			{
			echo"error conectandoa la base de datos. <br>";
			exit();
			}
			else{
			echo "listo estamos conectados. <br>";
			}
			if (!mysqli_select_db($link,$baseDeDatos))
			{
			echo "error seleccionando la base de datos. <br>";
			exit();
			}
			else{
			echo "obtuvimos la base de datos $baseDeDatos sin problema.<br>";
			}
			return $link;
			}
			?>
	</body>
</html>
			