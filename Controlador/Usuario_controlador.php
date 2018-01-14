<?php

	if (isset($role) && (isset($userid))){
		if (($role == 1) && (!isset($option))){
			require_once("../Vista/Navigation.php");
		}
	}else{
		$role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
		$userid = filter_input(INPUT_POST, 'userid', FILTER_SANITIZE_STRING);
		$option = filter_input(INPUT_POST, 'option', FILTER_SANITIZE_STRING);
		if (isset($option)){
			if ($option == 1){
				require_once("../Vista/Home.php");
			}elseif ($option == 2) {
				require_once("../Vista/Formulario.php");
			}
		}
	}

?>