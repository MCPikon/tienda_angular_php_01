<?php
require("../librerias_php/setup_redbean.php");

$id = $_GET["id"];

$videojuego = R::getRow("SELECT * FROM videojuegos WHERE id = ?", [$id]);

echo json_encode($videojuego);