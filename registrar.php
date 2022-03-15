<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrar</title>
</head>
<body>
	<form id="form_reg" action="validarRegistrarse.php" method="POST">
		<h1>Registrase</h1>
		<p>Usuario <input type="text" placeholder="ingrese su usuario" name="usuario"></p>
		<p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
		<p>Verifique Contraseña <input type="password" placeholder="verifique su contraseña" name="verifcontraseña"></p>
		<button type="submit" class="btn btn-primary">Registrar</button>

	</form>
</body>
</html>