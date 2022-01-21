<?php
require("../librerias_php/setup_redbean.php");

$videojuegos = R::getAll("select * from videojuegos");

echo json_encode($videojuegos);