<?php
    require_once "../clases/Conexion.php";
    require_once "../clases/Metodos.php";
    

    $id_paises=$_GET['idPais'];
    $obj= new Metodos();

    if ($obj->eliminarDatos($id_paises)==1) {
        header("location:../index.php");
    }else{
        echo"fallo al eliminar";
    }
?>