<?php    
    include "../clases/Conexion.php";
    include "../clases/Metodos.php";
   

    $id_paises=$_POST ['id_paises'];
    $id_continente=$_POST['listaPaises'];
    $pais=$_POST['nombrePais'];
    $bandera=$_POST['banderas'];

    
    

    $datos = array($id_paises,$id_continente, $pais, $bandera);

    $obj = new Metodos();
    
    if ($obj->actualizaDatosNombre($datos) == 1) {
      header("location:../index.php");
      
    } else {
      echo "fallo al agregar";
    }
?>    