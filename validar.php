<?php
	$ip=$_SERVER['REMOTE_ADDR'];
	$captcha=$_POST['g-recaptcha-response'];
	$secretkey="6Lc_it8eAAAAAEs5b1DmiZ09QwKZ62J-QVvJc2Uq";

	$respuesta= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

	$datos = json_decode($respuesta,true);//convirtirendo a tipo json

	print_r($datos);

	$errors=array();

	if (!$datos['success']) {
		
	}else{
		echo "Verificar Captcha";
	}




	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];

	session_start();

	$_SESSION['usuario']=$usuario;

	include('db.php');

	$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";

	$resultado = mysqli_query($conn, $consulta);

	$filas=mysqli_num_rows($resultado);

	if ($filas) {
		header("location:home.php");
	}else{	
		?>
		<?php
		include("index.php");
		?>
		<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
		<?php
	}
	mysqli_free_result($resultado);
	mysqli_close($conn);
 ?>