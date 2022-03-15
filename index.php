<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script src="https://www.google.com/recaptcha/api.js?render=6Lfg7t4eAAAAAGYzU9Jc685Lc2_tViqbQHKXMK_l"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	 

	<title>Login</title>
</head>
<body>
	<form id="form_login" action="validar.php" method="POST">
		<h1>Sistema Login</h1>
		<p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
		<p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
		<div>
			<div class="g-recaptcha" data-sitekey="6Lc_it8eAAAAADfHRiKPRnk2o9_qiTKG25ISL6zO">
				
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Ingresar</button>

	</form>
	<a href="registrar.php">Registrarse</a>
</body>
</html>