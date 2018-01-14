<?php 
require_once("../DBase/DBase.php");
class Pedidos{
	public function setNewPedido($clientamount, $clientdestino, $clientorigen,$clientemail, $clientdni, $clientname, $clientid){
		$orderid = 2;
		$ispaid = 0;
		$fecha = "2017-01-13";
		$tipocambio = 14523.321;
		$modelo = new DBase();
		$conexion = $modelo->get_conexion();
		$sql = "insert into pedidos (orderid, monto, currency, destination, origin, recipient, recipientid, ispaid, fecha, clientid) values (:orderid,:monto,:tipocambio,:destino,:origen,:receptor,:receptorid,:ispaid,:fecha,:cliente)";
		$statement = $conexion->prepare($sql);
		$statement->bindParam(':orderid', $orderid);
		$statement->bindParam(':monto', $clientamount);
		$statement->bindParam(':tipocambio', $tipocambio);
		$statement->bindParam(':destino', $clientdestino);
		$statement->bindParam(':origen', $clientorigen);
		$statement->bindParam(':receptor', $clientname);
		$statement->bindParam(':receptorid', $clientdni);
		$statement->bindParam(':ispaid', $ispaid);
		$statement->bindParam(':fecha', $fecha);
		$statement->bindParam(':cliente', $clientid);
		if (!$statement){
			return null;
		}else{
			$statement->execute();
			return $orderid;
		}


	}
}
?>