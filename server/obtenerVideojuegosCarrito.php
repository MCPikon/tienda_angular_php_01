<?php
session_start();
if(isset($_SESSION["carrito"])){
    require "../librerias_php/setup_redbean.php";
    $ids = array();
    $cantidades = array();
    foreach ($_SESSION["carrito"] as $elemento){
        array_push($ids,$elemento[0]);//0 es la id
        array_push($cantidades,$elemento[1]);//1 es la cantidad
    }

    $ids_sql= implode(",",$ids);
    $sql = "select * from videojuegos where id in ($ids_sql)";

    $videojuegos = R::getAll($sql);

    $respuesta = array();

    for($i = 0; $i<count($videojuegos); $i++){
        array_push($respuesta, array("videojuego" => $videojuegos[$i],"cantidad" => $cantidades[$i]));
    }//fin for

    echo json_encode($respuesta);
}else{
    echo json_encode(array());
}