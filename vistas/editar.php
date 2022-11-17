<?php

include "../clases/Conexion.php";
include "../clases/Metodos.php";

$obj = new Metodos();
$datos = $obj->conectar();
$posision = 1;
$id_paises = $_GET['id_paises'];
$sql2= "SELECT id_continente, nombrePais, banderas FROM t_paises WHERE id_paises ='$id_paises'"; 
$sql = " SELECT * FROM t_continente";

$result = mysqli_query($datos,$sql2,$sql);
$ver = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Editar</title>
</head>

<body>
    <div class="container">
        <div class="row  mt-4 font-monospace">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Paises registrados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./filtrar.php">Filtrar por continente</a>
                </li>

            </ul>


            <div class="col font-monospace">
                <h2>
                    <p class="text-center">ACTUALIZAR</p>
                </h2>

                <form class="row g-2" action="../procesos/actualizar.php" method="POST">

                    <select name="listaPaises" id="listaPaises" class="form-select" value="<?php echo $ver[0] ?>">
                        <?php
                        while ($ver = mysqli_fetch_array($result)) {
                            if ($ver['id_continente'] == $posision) {
                        ?>
                                <option selected value="<?php echo $ver['id_continente'] ?>">
                                    <?php echo $ver['nombre'] ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $ver['id_continente'] ?>">
                                    <?php echo $ver['nombre'] ?>
                                </option>
                            <?php
                            }
                            ?>
                        <?php
                        }
                        ?>
                    </select>
                    <div class="col-sm-6">
                        <label for="">Pais</label>
                        <input type="text" name="nombrePais" class="form-control" value="<?php echo $ver[1] ?>">
                    </div>
                    <div class="col-sm-6">
                        <label for="">Bandera</label>
                        <input type="text" name="banderas" class="form-control" value="<?php echo $ver[2] ?>">
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="../listaPaises.js"></script>
</body>

</html>