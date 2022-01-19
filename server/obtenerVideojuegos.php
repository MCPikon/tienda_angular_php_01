<?php
require("conexion.php");

if ($conexion -> connect_errno) {
    echo "<br>error de conexion con la base de datos";
}else {
    $sql = "select * from videojuegos;";
    $res = $conexion -> query($sql);

    if($res -> num_rows > 0) {
        $videojuegos = array();
        while($row = $res -> fetch_assoc()) {
            array_push($videojuegos,$row);
        }//fin while
        echo json_encode($videojuegos);
    }//fin if
}//fin else

$conexion -> close();