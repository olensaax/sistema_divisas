<?php
	require_once("../DAO/Usuarios.php");
	$opcion = filter_input(INPUT_POST, 'opcion', FILTER_SANITIZE_STRING);
	if ((isset($opcion)) && ($opcion == 1)){//si opcion = 1 entonces es registrarse:
		require_once("../Vista/Registro.php");
	}else{
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
		$contraseña = filter_input(INPUT_POST, 'contraseña', FILTER_SANITIZE_STRING);
		$usuarios = new Usuarios();
		$validado = true;
		//$validado = $usuarios->validateUser($usuario, $contraseña);
		if ($validado){
			$role = 1;
			$userid = 1;
			require_once("../Controlador/Usuario_controlador.php");
		}
	}
?>