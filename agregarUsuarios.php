<?php
    function accion($x){
        if($x == "Agregar"){
            return 1;
        }
        if($x == "Cancelar"){
            return 2;
        }
    }
    $accion = accion(filter_input(0,"action"));
    print($accion);
    switch ($accion){
        case 1:
            break;
        case 2:
            header("Location: usuarios.php");
            break;
    }
?>