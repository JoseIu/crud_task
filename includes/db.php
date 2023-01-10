<?php 
    // $conection = mysqli_connect('localhost','root','root','taskv2');
    // if (!$conection) {
    //     echo 'Error';
    //     exit;
    // }

    function conectarDB():mysqli{
        $conection = mysqli_connect('localhost','root','root','taskv2');
        
        if (!$conection) {
            echo 'Error';
            exit;
        }
        // echo 'All good';
        return $conection;
    }
   


?>