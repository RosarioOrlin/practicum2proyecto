<?php

    //conexion con la base de datos y el servidor
	$link = mysqli_connect("localhost","root","") or die ("<h2>No se encuentra el servidor</h2>");
	$db = mysqli_select_db($link,"db_sistemaCovid19") or die ("<h2>Error de Conexion</h2>");

    $dni = $_POST['cedula'];
	$apellidos = $_POST['apellidos'];
	$nombres = $_POST['nombres'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
    $email = $_POST['email'];
	$pass = $_POST['password'];
	$rpass = $_POST['rpass'];

    //Obtiene la longitus de un string
	$req = (strlen($dni)*strlen($apellidos)*strlen($nombres)*strlen($direccion)*strlen($telefono)*strlen($email)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

    //se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="index.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	mysqli_query($link, "INSERT INTO personas VALUES('','$dni','$apellidos','$nombres','$direccion','$telefono','$email','$contraseñaUser')") or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
		alert("Registro Exitoso");
		location.href="/index.html";
		</script>
	'

?>