<div style="margin: 10px;">
titulo: <?=$videojuego["titulo"]?> <br>
precio: <?=$videojuego["precio"]?> <br>
descripcion: <?=$videojuego["descripcion"]?> <br>
<a onclick="return confirm('¿seguro? si borras el producto, también se borraran los pedidos de dicho producto')" href="?idBorrar=<?=$videojuego['id']?>">BORRAR</a>
</div>