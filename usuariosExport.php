<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arch= fopen("usuarios.dat","r");
    $arch2 = fopen("respalda.csv","w");
    while(!feof($arch)){
        $dat = fread($arch,16);
        $res=trim(substr($dat,0,12)).",".substr($dat,12,1).",".trim(substr($dat,13,3));
        if(strlen($res)>4){fwrite($arch2,$res."\r");}
    }
    fclose($arch);
    fclose($arch2);
    $fileName = basename("respalda.csv");
    $filePath =  $fileName;
    if(!empty($fileName) && file_exists($filePath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
    }
    // header("Location: algun documento");
    ?>
</body>
</html>