<?php
    $archivo = fopen('usuarios.dat', 'r');
    $archivo2 = fopen('respalda.csv', 'w');
    while(!feof($archivo)){
        $dato = fread($archivo, 16);
        $res = trim(substr($dato,0,12)).','.substr($dato,12,1).','.trim(substr($dato,13,3));
        if(strlen($res)>4){
        fwrite($archivo2, $res."\r");
        }
    }
    fclose($archivo);
    fclose($archivo2);  
    header("Location: index.php");
?>