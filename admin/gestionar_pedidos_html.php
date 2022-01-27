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
        <h3>Pedidos realizados en la tienda</h3>
        <?php 
        $idpedido = 0;
        $idpedido_anterior = 0;

        foreach ($pedidos as $pedido) {
            //no esta bien pasar de codigo php a html continuamente / codigo spaghetti
            //la alternativa sería usar cualquier motor de plantillas o un framework
            $idpedido = $pedido["id"];
            ?>
            <?php if ($idpedido!=$idpedido_anterior) { ?>
                <div class="row gy-3">
                    <div class="col-auto col-lg-4">
                        <ul style="margin: 10px; text-align: center;">
                            <li class="list-group-item list-group-item-info"><b>Nombre Destinatario:</b> <?= $pedido["nombre"]?></li>
                            <li class="list-group-item list-group-item-info"><b>Direccion Envio:</b> <?= $pedido["direccion"]?></li>
                            <li class="list-group-item list-group-item-info"><b>Numero Tarjeta:</b> <?= $pedido["tarjeta"]?></li>
                        </ul>
                    </div>    
                    <div class="col-auto col-lg-4"></div>
                    <div class="col-auto col-lg-4"></div>
                </div>
                <h4><em>Productos del pedido de id <?= $pedido["id"]?></em></h4>
            <?php } //fin if ?>
                <div class="row gy-3">
                    <div class="col-auto col-lg-6">
                        <div class="table-responsive">
                            <table class="table table-bordered table-secondary table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Plataforma</th>
                                        <th scope="col">Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?=$pedido["titulo"]?></td>
                                        <td><?=$pedido["precio"]?> &euro;</td>
                                        <td><?=$pedido["estado"]?></td>
                                        <td><?=$pedido["plataforma"]?></td>
                                        <td><?= $pedido["cantidad"]?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-auto col-lg-3"></div>
                    <div class="col-auto col-lg-3"></div>
                </div>
            <?php
            $idpedido_anterior = $idpedido;
        }//fin foreach
        ?>
    </div>
</body>
</html>