<?php
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];
	$contraseñaVal=$_POST['verifcontraseña'];

	if ($contraseña==$contraseñaVal) {
		include('db.php');

		$consulta = "INSERT INTO `usuarios`(`usuario`, `contraseña`) VALUES ('$usuario','$contraseña')";

		$resultado = mysqli_query($conn, $consulta);

		if ($resultado) {
			echo "Usuario Registrado";
			header("location:index.php");

		}else{
			?>
		<?php
		include("index.php");
		?>
		<h1 class="bad">ERROR AL INGRESAR USUARIO</h1>
		<?php
		}

		mysqli_close($conn);
	}else{
		echo "Contraseñas diferentes";
	}

	
?>