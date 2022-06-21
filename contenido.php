<?php $tabName = "Portafolio"; ?>
<?php

//Chequeo de sesión
session_start();
if(!isset($_SESSION['logueado'])){
    header("location:index.php");
}

//Obtiene la conexion y traer tareas
require_once "conexion.php";
$conexion = new conexionBase();
$tareas = $conexion->consultar("SELECT * FROM `tareas`");

?>
<?php require_once "header.php" ?>

<body class="backgroundimageBody">

    <?php require_once "headbar.php" ?>

    <div class="container pageContainer">
        <div class="row">
            <div class="col text-centered">

                <div class="card bg-dark text-white">
                    <div class="card-header">
                        Listado de tareas
                    </div>
                    <div class="card-body">

                        <form action="crearTarea.php" method="POST" class="form-inline">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <input class="form-control mr-sm-2" name="tema" type="text" placeholder="Tema">
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control mr-sm-2" name="descripcion" type="textarea" placeholder="Descripción">
                                    </div>
                                    <div class="col-3">
                                        <button class="btn btn-success" type="submit">Agregar nueva tarea</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <br>
                        <hr>
                        <br>
                        
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Tema</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Creado el...</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Cambiar estado</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($tareas as $t){?>
                                <tr>
                                    <td><?= $t['tema']; ?></td>
                                    <td><?= $t['descripcion']; ?></td>
                                    <td><?= $t['fechaCreacion']; ?></td>
                                    <td><?= $t['estado']; ?></td>
                                    <td>
                                        <?php if($t['estado']!="Finalizado"){ ?>
                                        <form action="avanzarTarea.php" method="POST">
                                            <input type="hidden" name="advance" value="<?= $t['id']; ?>"></input>
                                            <input type="hidden" name="estado" value="<?= $t['estado']; ?>"></input>
                                            <button type="submit" class="btn btn-primary btn-sm">Avanzar</button>
                                        </form>
                                        <?php }else{ ?>
                                            La tarea está hecha.
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <form action="borrarTarea.php" method="POST">
                                            <input type="hidden" name="delete" value="<?= $t['id']; ?>"></input>
                                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                        </form>    
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

<style>

.pageContainer{
    width: 80%;
    margin-top: 50px;
}

.backgroundimageBody{
    background: url(https://i.redd.it/qub0v52rls551.png) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

</style>

<?php require_once "footer.php" ?>