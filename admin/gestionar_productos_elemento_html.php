<tr>
    <th scope="row"><?=$videojuego["id"]?></th>
    <td><img style="height: 120px;" src="../server/imagenes/<?=$videojuego["id"]?>.jpg"></td>
    <td><?=$videojuego["titulo"]?></td>
    <td><?=$videojuego["precio"]?> &euro;</td>
    <td><?=$videojuego["estado"]?></td>
    <td><?=$videojuego["plataforma"]?></td>
    <td><a class="btn btn-danger btn-lg" onclick="return confirm('¿seguro? si borras el producto, también se borraran los pedidos de dicho producto')" href="?idBorrar=<?=$videojuego['id']?>">BORRAR</a></td>
</tr>