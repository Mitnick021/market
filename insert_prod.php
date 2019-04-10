<?php
    include("database.php");

    $nombre=$_POST["nomprod"];
    $codigo=$_POST["codprod"];
    $cantidad=$_POST["cantprod"];
    $estado=$_POST["estprod"];

    $sql="INSERT INTO productos(nombre_prod,codigo_prod,cantidad,estado) VALUES ('$nombre','$codigo','$cantidad','$estado')";

    if($conn->query($sql)===TRUE){
        echo "producto registrado con exito";
    }else {
        die("error: " . $conn->error);
    }
?>