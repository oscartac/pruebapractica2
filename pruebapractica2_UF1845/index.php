<?php include "db/show_items.php"?>

<!doctype html>
<html lang="es">
<head>
	<!-- Informació Meta -->
	<meta charset="utf-8"/>
	<meta name="description" content="Lorem Ipsum">
	<meta name="keywords" content="Lorem, Ipsum">
	<meta name="author" content="Lorem Ipsum">

	<!-- GOOGLE FONT -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

	<!-- Enllaç a l'arxiu CSS Extern -->
	<link rel="stylesheet" href="css/style.css" type="text/css"/>

	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>

	<!-- Enllaç a Javascript Extern -->
	<script  type="text/javascript" src="js/javascript.js"></script>

	<!-- favicon -->
	<link href="img/favicon.png" rel="icon" type="image/png" />

	<!-- Títol de la pàgina -->
	<title>Evaluación MF0492_3 Segunda Convocatoria</title>
</head>
<body>
	<header></header>
	<section>
		<article>
			<h2>Evaluación MF0492_3 Segunda Convocatoria</h2>
			<form id="form" action="db/insert_items.php" method="POST">
				<label>Nombre: </label>
				<input type="text" name="nombre" id="nombre" ><br>
				<label>Apellido: </label>
				<input type="text" name="apellido" id="apellido"><br>
				<input type="submit" value="Enviar">
			</form>

			<div id="data">
				<?php
					$data = show_items();
					echo $data;
				?>
			</div>
		</article>
	</section>
	<footer></footer>
</body>
</html>
