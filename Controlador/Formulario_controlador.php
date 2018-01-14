<?php
require_once("../DAO/Pedidos.php");
require_once("../DAO/Clientes.php");
$clientid = filter_input(INPUT_POST, 'clientid', FILTER_SANITIZE_STRING);
$clientname = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
$clientdni = filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_STRING);
$clientemail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$clientphone = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
$clientorigen = filter_input(INPUT_POST, 'origen', FILTER_SANITIZE_STRING);
$clientdestino = filter_input(INPUT_POST, 'destino', FILTER_SANITIZE_STRING);
$clientamount = filter_input(INPUT_POST, 'monto', FILTER_SANITIZE_STRING);

$orders = new Pedidos;
$newOrderid = $orders->setNewPedido($clientamount, $clientdestino, $clientorigen,$clientemail, $clientdni, $clientname, $clientid);

include '../index.php';
?>