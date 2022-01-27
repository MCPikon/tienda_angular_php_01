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
    <h3>Introduce los datos del nuevo producto:</h3>

    <form action="registrar_videojuego.php" class="align-items-center" method="POST" enctype="multipart/form-data">
        <div class="row g-3 mb-2">
            <div class="col-auto">
                <label for="inputTitulo" class="col-form-label">Titulo</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputTitulo" class="form-control" name="titulo">
            </div>
        </div>
        <div class="row g-3 mb-2">
            <div class="col-auto">
                <label for="inputPrecio" class="col-form-label">Precio</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputPrecio" class="form-control" name="precio">
            </div>
        </div>
        <div class="row g-3 mb-2">
            <div class="col-auto">
                <label for="inputDescripcion" class="col-form-label">Descripcion</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputDescripcion" class="form-control" name="descripcion">
            </div>
        </div>
        <div class="row g-3 mb-2">
            <div class="col-auto">
                <label for="inputEstado" class="col-form-label">Estado</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputEstado" class="form-control" name="estado">
            </div>
        </div>
        <div class="row g-3 mb-2">
            <div class="col-auto">
                <label for="inputFormato" class="col-form-label">Formato</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputFormato" class="form-control" name="formato">
            </div>
        </div>
        <div class="row g-3 mb-2">
            <div class="col-auto">
                <label for="inputEditor" class="col-form-label">Editor</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputEditor" class="form-control" name="editor">
            </div>
        </div>
        <div class="row g-3 mb-2">
            <div class="col-auto">
                <label for="inputPlataforma" class="col-form-label">Plataforma</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputPlataforma" class="form-control" name="plataforma">
            </div>
        </div>
        <div class="row g-3 mb-2">
            <div class="col-auto">
                <label for="inputPortada" class="col-form-label">Portada</label>
            </div>
            <div class="col-auto">
                <input type="file" id="inputPortada" class="form-control" name="portada">
            </div>
        </div>

        <input type="submit" class="btn btn-primary btn-lg mt-2" value="Registrar Producto">

    </form>
</div>
</body>
</html>