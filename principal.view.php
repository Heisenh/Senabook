<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Inicio</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<link href="css/app.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row centered-form">
			<div class="col-xs-12 col-md-4 col-lg-4 ">
				<form action="" method="post">
					<?php require'registrar_usuarios.php'; ?>
				</form>
			</div> <!-- col 1 -->
		</div> <!-- row centered-form -->
	</div> <!-- class container -->

	<div class="container">
		<div class="row centered-form">
			<div class="col-xs-12 col-md-4 col-lg-4">
				<form action="" method="post">
					<?php require'login.php'; ?>
				</form>
			</div> <!-- col 2 -->
		</div> <!-- row centered-form -->
	</div> <!-- class container -->
</body>
</html>