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

   

}   

?>
