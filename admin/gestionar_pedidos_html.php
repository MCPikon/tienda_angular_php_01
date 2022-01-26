<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("menu.php");?>
    <div class="container-fluid">
        <div>
            Pedidos realizados en la tienda
        </div>
        <?php 
        $idpedido = 0;
        $idpedido_anterior = 0;

        foreach ($pedidos as $pedido) {
            //no esta bien pasar de codigo php a html continuamente / codigo spaghetti
            //la alternativa sería usar cualquier motor de plantillas o un framework
            $idpedido = $pedido["id"];
            ?>
            <?php if ($idpedido!=$idpedido_anterior) { ?>
                <div style="margin: 10px; text-align: center;">
                    nombre destinatario: <?= $pedido["nombre"]?> <br>
                    direccion envio: <?= $pedido["direccion"]?> <br>
                    numero tarjeta: <?= $pedido["tarjeta"]?> <br>
                </div>
                <div style="margin-left: 10px;">
                    productos del pedido:
                </div>
            <?php } //fin if ?>
            <div style="margin: 10px;">
                titulo: <?= $pedido["titulo"]?> <br>
                precio: <?= $pedido["precio"]?> <br>
                descripcion: <?= $pedido["descripcion"]?> <br>
                cantidad: <?= $pedido["cantidad"]?> <br>
            </div>
            <?php
            $idpedido_anterior = $idpedido;
        }//fin foreach
        ?>
    </div>
</body>
</html>