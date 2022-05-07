<?php 
$nombreArchivo = 'C:\xampp\carpeta-segura\archivo.csv';
if(file_exists($nombreArchivo)){
    ini_set("auto_detect_line_endings", true);
    $arch = file($nombreArchivo);

    print_r($arch);
    // echo "$arch[0] <br>";
    // echo "$arch[1] <br>";
    // echo "$arch[2] <br>";


    foreach ($arch as $key => $value) {
        if($value != ""){
            $separado = explode(",", $value);
            // print_r($separado);
            echo "$separado[0] | $separado[1] | $separado[2] <br>";

            // AQUI DEBERIA DE HACER LO DEMAS PARA GUARDARLO EN EL ARCHIVO, PERO NO SE LEYERON COMO YO ESPERABA.
        }
    }
}
else{
    header("location: index.php");
}


?>