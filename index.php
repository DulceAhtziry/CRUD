    <?php

    include "./clases/Conexion.php";
    include "./clases/Metodos.php";

    $metodo = new Metodos();
    $datos = $metodo->mostrarTodo();


    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
        <title>Inicio</title>
    </head>

    <body>
        <div class="container">
            <div class="row  mt-4 font-monospace">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./vistas/agregar.php">Agrgar pais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./vistas/filtrar.php">Filtrar por continente</a>
                    </li>

                </ul>


                <div class="col font-monospace">
                    <h2>
                        <p class="text-center">Paises registrados</p>
                    </h2>
                    <form action="#" method="POST">
                        <table id="tablaVistas" class="table table-info table-striped table-bordered border-primary  font-monospace text-center">

                            <thead>

                                <th>Continente</th>
                                <th>Pais</th>
                                <th>Bandera</th>
                                <th>Editar</th>
                                <th>Eliminar</th>

                            </thead>
                            <tbody>
                                <?php foreach ($datos as $item) :
                                    $paisId = 'idPais' ?>
                                    <tr>

                                        <td><?php echo $item['nombreContinente'] ?></td>
                                        <td><?php echo $item['nombrePaises'] ?></td>
                                        <td style="vertical-align: middle;"><img src="<?php echo $item['bandera'] ?>" alt="" width="20%" height="20%"></td>
                                        <td>
                                            <a href="./vistas/editar.php ?idPais=<?php echo $item['idPais'] ?>"> Editar</a>
                                        </td>
                                        <td>
                                            <a href="./procesos/eliminar.php?idPais=<?php echo $item['idPais'] ?>"> Eliminar</a>
                                        </td>

                                    </tr>
                                <?php endforeach;   ?>
                            </tbody>
                        </table>

                    </form>
                </div>
            </div>
        </div>
        <script src="./jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
        <script src="./listaPaises.js"></script>
        <script src="./tabla.js"></script>
    </body>

    </html>