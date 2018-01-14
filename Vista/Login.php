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
	<div class="w3-content w3-margin-top" style="max-width:500px;">
		<div class="w3-row-padding" style="padding-top: 110px">
			<div class="w3-white w3-text-grey w3-card-4">
				<div class="w3-container">
					<header>
						<h1>Envio de dinero a Venezuela</h1>
						<form action="Controlador/login_controlador.php" method="post">
							<table class="w3-responsive">
								<tr>
									<td><h5><i class = "fa fa-id-card-o fa-fw w3-margin-right w3-large w3-text-teal"></i>Usuario:</h5></td>
									<td style="padding-left: 5px"><input type=text name="usuario"></td>
								</tr>
								<tr>
									<td> <h5><i class = "fa fa-key fa-fw w3-margin-right w3-large w3-text-teal"></i>Contraseña:</h5></td>
									<td style="padding-left: 5px"><input type="text" name="contraseña"></td>
								</tr>
								<tr>
									<td>
										<form action="Controlador/login_controlador.php" action="post">
											<input type="hidden" name="opcion" value="2">
											<div style="margin: 0px 0px 0px 0px; padding: 15px; text-align: left">
						        				<input type="submit" class="w3-btn w3-ripple w3-teal button" value="Ingresar">
						    				</div>
						    			</form>
									</td>
									<td>
										<form action="Controlador/login_controlador.php" action="post">
											<input type="hidden" name="opcion" value="1">
											<div style="margin: 0px 0px 0px 0px; padding: 15px; text-align: left">
						        				<input type="submit" class="w3-btn w3-ripple w3-teal button" value="Registrarse">
						    				</div>
						    			</form>
					    			</td>
								</tr>
							</table>
						</form>
					</header>		
				</div>
			</div>	
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<footer class="w3-container w3-teal w3-center w3-margin-top" style="padding-top: 8px;">
    <p>Contacta a soporte técnico</p>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <i class="fa fa-google-plus w3-hover-opacity"></i>
    <p>Reportar problemas <a href="https://www.fb.com" target="_blank">clic aquí</a></p>
</footer>
</body>
</html>