<?php
require "../librerias_php/setup_redbean.php";

if (isset($_GET["idBorrar"])) {
    R::exec('DELETE FROM pedidos WHERE id = ?', [$_GET["idBorrar"]]);
    R::exec('DELETE FROM productopedido WHERE id_pedido = ?', [$_GET["idBorrar"]]);
}//fin if

$sql = "SELECT p.id, v.titulo, v.precio, v.descripcion, v.estado, v.formato, v.editor, v.plataforma, p.nombre, p.direccion, p.tarjeta, pp.cantidad 
FROM videojuegos AS v, pedidos AS p, productopedido AS pp WHERE p.id = pp.id_pedido AND v.id = pp.id_producto ORDER BY p.id DESC;";

$pedidos = R::getAll($sql);

require("gestionar_pedidos_html.php");