<?php
    declare(strict_types = 1);

    require 'includes/db.php';
    $db = conectarDB();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Task V.2</title>
</head>
<body>
    <main>
        <section class="task wrapper">
            <a href="includes/add.php" class="task__add">+</a>
            <table class="task__table">
                <thead class="task__thead">
                    <tr class="task__tr-th">
                        <th class="task__th">Título</th>
                        <th class="task__th">Descripción</th>
                        <th class="task__th">Fecha</th>
                        <th class="task__th">Acciones</th>
                    </tr>
                </thead>

                <tbody class="task__tb">

                    <?php 
                        $query = "SELECT * FROM taskv";
                        $resultTask = mysqli_query($db, $query);

                        while($row = mysqli_fetch_assoc($resultTask)){ ?>
                            <tr class="task__tr-tb">
                                <td class="task__td"><?php echo $row['titulo'] ?> </td>
                                <td class="task__td"><?php echo $row['descripcion'] ?> </td>
                                <td class="task__td"><?php echo $row['fecha'] ?> </td>
                                <td class="task__td task__td--flex">
                                    <a href="includes/edit.php?id=<?php echo $row['id']?>">
                                        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="task__edit" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                        </svg>
                                    </a>
                                    <a href="includes/remove.php?id=<?php echo $row['id']?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="task__delete" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                    </a>
                                </td>
                            </tr>

                        <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>