<?php
    require 'db.php';

    $db = conectarDB();

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET['id'];
        $query = "SELECT * FROM taskv WHERE id=$id";

        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_array($result);
            $titulo = $row['titulo'];
            $descripcion = $row['descripcion'];
        }
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_GET['id'];
        $tituloUpdate = $_POST['tituloUpdate'];
        $descripcionUpdate = $_POST['descripcionUpdate'];
        // echo $tituloUpdate . '<br><br>';
        // echo $descripcionUpdate;

        $query = "UPDATE taskv SET titulo = '$tituloUpdate', descripcion = '$descripcionUpdate'";
        mysqli_query($db, $query);
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
            <form class="form" action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                <label class="form__label" for="titulo">Título</label>
                <input class="form__input" type="text" name="tituloUpdate" value="<?php echo $titulo;?>">
                
                <label class="form__label" for="descripcion">Descripción</label>
                <textarea class="form__input" name="descripcionUpdate"cols="30" rows="10"><?php echo $descripcion;?></textarea>

                <input class="form__add" name="add" type="submit" value="Agregar">
            </form>
        </section>
    </main>
</body>
</html>