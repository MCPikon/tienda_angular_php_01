<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("menu.php")?>
    <div class="container-fluid">
        <h3>Listado de productos de la tienda:</h3>
        <table class="table table-bordered table-success table-striped">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Portada</th>
                <th scope="col">Titulo</th>
                <th scope="col">Precio</th>
                <th scope="col">Estado</th>
                <th scope="col">Plataforma</th>
                <th scope="col">Borrar</th>
            </tr>
            </thead>
            <tbody>
            <?php 
                foreach($videojuegos as $videojuego) {
                    include("gestionar_productos_elemento_html.php");
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>