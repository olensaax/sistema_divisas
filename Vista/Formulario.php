<div class="w3-row">
	<form action="Controlador/Formulario_controlador.php" method ="post">	
		<input type="hidden" name="clientid" value="1">
		<h2> Complete el formulario para el envio de dinero </h2>
		<table class="w3-responsive">
			<tr>
				<td> <font class="w3-text-teal"> Nombre:  </font></td>
				<td> <input input class="" size="40" maxlength="255" type="text" name="nombre"> </td>
			</tr>
			<tr>
				<td> <font class="w3-text-teal"> Documento de identidad: </font></td>
				<td> <input input class="" size="40" maxlength="255" type="text" name="dni"> </td>
			</tr>
			<tr>
				<td> <font class="w3-text-teal"> Correo: </font> </td>
				<td> <input input class="" size="40" maxlength="255" type="text" name="email"> </td>
			</tr>
			<tr>
				<td> <font class="w3-text-teal"> Telefono: </font> </td>
				<td><input input class="" size="40" maxlength="255" type="text" name="telefono"></td>
			</tr>
			<tr>
				<td> <font class="w3-text-teal"> Dirección (Origen): </font></td>
				<td> <input input class="" size="40" maxlength="255" type="text" name="origen"> </td>
			</tr>
			<tr>
				<td> <font class="w3-text-teal"> Direccion (Destino): </font> </td>
				<td> <input input class="" size="40" maxlength="255" type="text" name="destino"> </td>
			</tr>
			<tr>
				<td> <font class="w3-text-teal"> Monto a Enviar:  </font></td>
				<td> <input input class="" size="10" name="monto"> </td>
			</tr>
			<tr>
				<td></td>
				<td>
					<div style="margin: 0px 0px 0px 0px; padding: 15px; text-align: left">
	        			<input type="submit" class="w3-btn w3-ripple w3-teal button">
	    			</div>
				</td>
			</tr>		
		</table>
	</form>
</div>