<?php
session_start();
$jsonInfo = json_decode(file_get_contents("php://input"));

if( ! isset($_SESSION["carrito"])){
    $_SESSION["carrito"] = array();
}//fin if

$productoCarrito_en_sesion = false;
for($i= 0 ; $i<count($_SESSION["carrito"]);$i++){
    if($_SESSION["carrito"][$i][0]==$jsonInfo->id){
        $productoCarrito_en_sesion = true;
        $_SESSION["carrito"][$i][1] +=  $jsonInfo->cantidad;
    }    
}
if (! $productoCarrito_en_sesion){
    array_push($_SESSION["carrito"],array($jsonInfo->id, $jsonInfo->cantidad));
}


echo json_encode("ok");