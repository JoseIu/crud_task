<?php 
    require 'db.php';
    $db = conectarDB();

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET['id'];
        // echo $id;

        $query = "DELETE  FROM taskv WHERE id='$id'";

        $resultado = mysqli_query($db, $query);

        if($resultado){
            echo 'borrado';
        }

        header('Location: ../index.php');
    }
?>