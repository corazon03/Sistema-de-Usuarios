<?php 
$nombreArchivo = 'C:\xampp\carpeta-segura\archivo.csv';
if(file_exists($nombreArchivo)){
    $arch = file($nombreArchivo);

    print_r($arch);
    // echo "$arch[0] <br>";
    // echo "$arch[1] <br>";
    // echo "$arch[2] <br>";

    // AQUI HAY ERRORES QUE NO SE PORQUE PASA, PERO NO LOS SEPARA POR SALTOS DE LINEA .-.

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