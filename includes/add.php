<?php
    require 'db.php';
    $db = conectarDB();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $titulo      = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        $query = "INSERT INTO taskv (titulo, descripcion) VALUES ('$titulo', '$descripcion')";

        $result = mysqli_query($db, $query);

        // if($result){
        //     echo 'ingresado correctamente';
        // }else{
        //     echo 'lol';
        // }

        header('Location: ../index.php');
    }


?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Task V.2</title>
</head>
<body>
    <main>
        <section class="wrapper">
            <form class="form" action="add.php" method="POST">
                <label class="form__label" for="titulo">Título</label>
                <input class="form__input" type="text" name="titulo">
                
                <label class="form__label" for="descripcion">Descripción</label>
                <textarea class="form__input" name="descripcion"cols="30" rows="10"></textarea>

                <input class="form__add" name="add" type="submit" value="Agregar">
            </form>
        </section>
    </main>
</body>
</html>