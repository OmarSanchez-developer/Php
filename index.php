<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mi sitio web </title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
	<body background="./images/bbq.jpg" bgcolor="439832"> 
<div class="contenedor">
	<section class="logo">
		<img src="./images/logo.png" alt="Mi Logo">
	</section>
	<section>
		<h1> Mi sitio web</h1>
		<p>datos recibidos del formulario</p>
		<table>
			<tr>
				<th>Usuario</th>
				<th>Clave</th>
			</tr>
			<tr>
				<td><?php echo $_POST['user'] ?></td>
				<td><?php echo $_POST['password'] ?></td>
			</tr>
		</table>

			<p>
				<a href="index.php">Volver </a>
			</p>
			</form>
	</section>
