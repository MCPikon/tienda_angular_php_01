<?php
require "../librerias_php/setup_redbean.php";
//si ha llegado un idBorrar borramos primero ese producto
if (isset($_GET["idBorrar"])) {
    R::exec('DELETE FROM videojuegos WHERE id = ?',
    [$_GET["idBorrar"]]);
    unlink("../server/imagenes/" . $_GET["idBorrar"] . ".jpg");
}//fin if

//obtenemos todos los videojuegos
$videojuegos = R::getAll("SELECT * FROM videojuegos");
require "gestionar_productos_html.php";