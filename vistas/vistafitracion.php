<?php
include "../header.php";
include "../clases/Conexion.php";
include "../clases/Metodos.php";
$vistafiltrada = $_POST ['listaPaises'];
$obj = new Metodos();
    $datos = $obj-> mostrarFiltrados( $vistafiltrada);
    
?>

<div class="container">
    <div class="row  mt-4 font-monospace">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Paises registrados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./agregar.php">Agregar país</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./filtrar.php">Filtrar por continente</a>
            </li>

        </ul>


        <div class="col font-monospace">
            <h2>
                <p class="text-center">FILTRAR POR CONTINENTE</p>
            </h2>
            <table id="tablaVistas" class="table table-info table-striped table-bordered border-primary  font-monospace text-center">

                <thead>

                    <th>Continente</th>
                    <th>Pais</th>
                    <th>Bandera</th>

                </thead>
                <tbody>
                    <?php foreach ($datos as $item) : ?>
                        <tr>

                            <td><?php echo $item['nombreContinente'] ?></td>
                            <td><?php echo $item['nombrePaises'] ?></td>
                            <td style="vertical-align: middle;"><img src="<?php echo $item['bandera'] ?>" alt="" width="15%" height="15%"></td>

                        </tr>
                    <?php endforeach;   ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


<?php
include "../footer.php"
?>