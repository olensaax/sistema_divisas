<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Envio de dinero a Venezuela </title>
	<meta name="description" content="Un sistema de divisas.">
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
    img {height:300px}
    table {border-collapse: collapse}
    table {width: 100%; padding-left: 70px;}
    a.button {-moz-appearance: button;appearance: button;text-decoration: none; color: initial}  
</style>
<body class="w3-light-grey">
	<div class="w3-content w3-margin-top" style="max-width:900px;">
		<div class="w3-row-padding">
			<div class="w3-third">
				<div class="w3-white w3-text-grey w3-card-4">
					<div class="w3-display-container">
                        <img src="../Imagenes/IMG_2081.PNG" style="width:100%" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                        </div>
                    </div>
					<div class="w3-container">
						<header>
							<nav>
								<ul>
									<li>
										<form action="../Controlador/Usuario_controlador.php" method="post">
											<input type="hidden" name="option" value="1">
											<input type="hidden" name="role" value="<?php echo $role ?>">
											<input type="hidden" name="userid" value="<?php echo $userid ?>">
											<input style="background:none!important; color:inherit; border:none; padding:0!important;   font: inherit; border-bottom:1px solid #444; cursor: pointer;" type="submit" name="inicio" value="Inicio">		
										</form>
									</li>
									<li>
										<form action="../Controlador/Usuario_controlador.php" method="post">
											<input type="hidden" name="option" value="2">
											<input type="hidden" name="role" value="<?php echo $role ?>">
											<input type="hidden" name="userid" value="<?php echo $userid ?>">
											<input style="background:none!important; color:inherit; border:none; padding:0!important;   font: inherit; border-bottom:1px solid #444; cursor: pointer;" type="submit" name="envio" value="Enviar Dinero">
										</form>
									</li>
									<li>Contactanos</li>
								</ul>
							</nav>	
						</header>
					</div>
				</div>
			</div>
			<div class="w3-twothird">
				<div class="w3-container w3-card-2 w3-white w3-margin-bottom">
					<h1> Bienvenidos a: Envio de dinero a venezuela </h1>
				</div>
											
			</div>
		</div>
	</div>
</body>
</html>