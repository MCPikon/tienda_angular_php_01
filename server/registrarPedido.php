<?php
session_start();
require "../librerias_php/setup_redbean.php";

$jsonInfo = json_decode(file_get_contents("php://input"));

$pedido = R::dispense("pedidos");

$pedido -> nombre = $jsonInfo -> nombre;
$pedido -> direccion = $jsonInfo -> direccion;
$pedido -> tarjeta = $jsonInfo -> tarjeta;

$id_pedido = R::store($pedido);

//registro los productos del carrito asociandolos a esa
//id de pedido y borro el carrito

foreach($_SESSION["carrito"] as $pc) {
    $producto_carrito = R::dispense("productopedido");
    $producto_carrito -> id_pedido = $id_pedido;
    $producto_carrito -> id_producto = $pc[0];
    $producto_carrito -> cantidad = $pc[1];
    R::store($producto_carrito);
}

//vaciar carrito
$_SESSION["carrito"] = array();

echo json_encode("ok");