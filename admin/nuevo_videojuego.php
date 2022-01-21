<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include("menu.php");?>
Introduce los datos del nuevo producto:

<form action="registrar_videojuego.php" method="POST" enctype="multipart/form-data">
    titulo: <input type="text" name="titulo"> <br>
    precio: <input type="text" name="precio"> <br>
    descripcion: <input type="text" name="descripcion"> <br>
    estado: <input type="text" name="estado"> <br>
    formato: <input type="text" name="formato"> <br>
    editor: <input type="text" name="editor"> <br>
    plataforma: <input type="text" name="plataforma"> <br>
    portada: <input type="file" name="portada"> <br><br>

    <input type="submit" value="REGISTRAR PRODUCTO">

</form>
    
</body>
</html>