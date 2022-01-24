<?php

require "../librerias_php/setup_redbean.php";

$videojuego = R::dispense("videojuegos");
$videojuego -> titulo = $_POST["titulo"];
$videojuego -> precio = $_POST["precio"];
$videojuego -> descripcion = $_POST["descripcion"];
$videojuego -> estado = $_POST["estado"];
$videojuego -> formato = $_POST["formato"];
$videojuego -> editor = $_POST["editor"];
$videojuego -> plataforma = $_POST["plataforma"];

$id = R::store($videojuego);

move_uploaded_file($_FILES["portada"]["tmp_name"],"../server/imagenes/$id.jpg");

include("registro_ok.php");