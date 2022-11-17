<?php
class Metodos extends Conexion
{
    public function mostrarTodo()
    {
        $conexion = parent::conectar();
        $sql = " SELECT * FROM continentes_paises";
        $respuesta = mysqli_query($conexion, $sql);
        return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
    }

    public function agregarContinentePais($datos)
    {
        $conexion = parent::conectar();
        $sql = "INSERT INTO t_paises (id_continente, nombrePais, banderas) values ('$datos[0]','$datos[1]','$datos[2]')";
        return mysqli_query($conexion, $sql);
    }

    public function mostrarFiltrados( $vistafiltrada)
    {
        $conexion = parent::conectar();
        $sql =" SELECT * FROM continentes_paises WHERE idContinente =  '$vistafiltrada'";
        $respuesta = mysqli_query($conexion,$sql);
        return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
    }
    public function actualizaDatosNombre($datos){
        $conexion = parent::conectar();
        $sql2="UPDATE t_paises set id_continente='$datos[0]',nombrePais='$datos[1]',banderas='$datos[2]'  WHERE id_paises = '$datos[3]'";
        return mysqli_query($conexion, $sql2);
    }

    public function eliminarDatos($id_paises){
        $conexion = parent::conectar();
        $sql="DELETE FROM t_paises WHERE id_paises = '$id_paises'";
        return mysqli_query($conexion,$sql);
        
    }
    public function buscarPais($paises){
    //    try {
    //        $paisencontrado = "";
    //        $conexion = parent::conectar();
    //        $sql = "SELECT nombrePais FROM t_paises"
    //    } catch (\Throwable $th) {
    // //        //throw $th;
    //    }
        
    }

}   

?>