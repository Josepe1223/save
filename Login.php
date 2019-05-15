<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario</title>
</head>
<body style="background: #F8E0E0">
	<form action="login.php" method="post">
		<table align="center" border="1" style="font-family:Arial;">
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			<tr>
				<td colspan="2" align="center"><label><h3><em>Crear usuario</em></h3></label></td>
			</tr>
			<tr>
				<td><em>Nombre</td>
				<td><input type="text" name="Nombre"required></td>
			</tr>
			<tr>
				<td><em>Apellidos</em></td>
				<td><input type="text" name="Apellidos"required></td>
			</tr>
			<tr>
				<td><em>Correo</em></td>
				<td><input type="email" name="Correo"required></td>
			</tr>
			<tr>
				<td><em>Telefono</em></td>
				<td><input type="number" name="Telefono"required></td>
			</tr>
			<tr>
				<td><em>Direccion</em></td>
				<td><input type="text" name="Direccion"required></td>
			</tr>
			<tr>
				<td><em>Ciudad</em></td>
				<td><input type="text" name="Ciudad"required></td>
			</tr>
			<tr>
				<td>Pais</td>
				<td><input type="text" name="Pais"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="button" name="Enviar" value="Enviar"></td>
			</tr>
		</table>
	</form>

<?php
	if (isset($_REQUEST['Enviar'])) {
		require_once "conexion.php";
		extract($_REQUEST);
		$fecha = date("Y-m-d");
		$query = "INSERT INTO t_usuario
				 (USU_NOMBRE, USU_APELLIDOS, USU_CORREO, USU_TELEFONO, USU_DIRECCION, USU_CIUDAD, USU_PAIS, USU_FCH_RGT)
				 VALUES
				 ('$Nombre', '$Apellidos', '$Correo', '$Telefono', '$Direccion', '$Ciudad', '$Pais', '$fecha')";
		$r = mysqli_query($con, $query) 
				or trigger_error("Error: ".mysqli_error($con));
		if (mysqli_affected_rows($con) == 1) {
			echo "<br />Registro insertado";
		}
	}
?>
</body>
</html>