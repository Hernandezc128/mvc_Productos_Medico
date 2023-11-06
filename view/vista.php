<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>Base de Datos bd_productosmedicos</h1>
	<h1>Tabla Usuarios</h1>
	<h1>Carlos Ivan Hernandez Monroy</h1>
	<table border="1">
		<tr>
			<td><strong>Id Usuario</strong></td>
			<td><strong>Nombre de Ususario</strong></td>
			<td><strong>Fecha de Creacion</strong></td>
			<td><strong>Correo de la Cuenta</strong></td>
			<td><strong>Contraseña</strong></td>
			<td><strong>Foto de Perfil</strong></td>
			<td><strong>Fecha de Nacimiento</strong></td>
			<td><strong>Numero de Tarjeta</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["id"]; ?></td>
						<td><?php echo $pd[$i]["nom_cuenta"]; ?> </td>
						<td><?php echo $pd[$i]["fecha_crea"]; ?></td>
						<td><?php echo $pd[$i]["correo_us"]; ?> </td>
						<td><?php echo $pd[$i]["contraseña"]; ?></td>
						<td><?php echo $pd[$i]["foto_perfil"]; ?> </td>
						<td><?php echo $pd[$i]["fecha_N"]; ?></td>
						<td><?php echo $pd[$i]["no_tarjeta"]; ?> </td>

					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>