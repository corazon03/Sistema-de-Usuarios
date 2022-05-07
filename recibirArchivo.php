<?php
    function accion($x){
        if ($x === "Enviar"){
            return 1;
        }
        else {
            return 0;
        }
    }
    $accion = accion(filter_input(0, "accion"));
    if($accion == 1){
        if(is_uploaded_file($_FILES["archivo"]["tmp_name"])){
            print_r($_FILES["archivo"]);
            if(substr($_FILES["archivo"]["name"], -3) == "csv"){
                $dirCarpeta = 'C:\xampp\carpeta-segura';
                move_uploaded_file($_FILES["archivo"]["tmp_name"],$dirCarpeta."\archivo.csv");
            }
            else{
                ?>
                <h1>Solo se permiten archivos CSV</h1>
                <a href="index.php">Volver...</a>
                <?php
            }

        }
        else {
            echo "<h1> No se envio el archivo! </h1>";
        }
    }
    else{
        header("location: index.php");
    }

?>