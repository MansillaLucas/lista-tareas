<?php $tabName = "Ingrese"; ?>
<?php

session_start();
if($_POST){

    require_once "conexion.php";

    $conexion = new conexionBase();

    $usuarioPost = $_POST['usuario'];
    $passwordPost = $_POST['password'];

    $usuario = $conexion->consultar("SELECT * FROM `usuarios` WHERE `usuario`='$usuarioPost' AND `password`='$passwordPost'");
    if(!empty($usuario)){
        $_SESSION['logueado']=true;
        header("location:presentacion.php");
    }
    


}

?>
<?php require_once "header.php" ?>

<body class="backgroundimageBody">

    <div class="container loginContainer">
        <div class="row">
            <div class="col text-centered">

                <div class="card bg-dark text-white">
                <div class="card-header">
                    Ingrese su usuario y contraseña
                </div>
                <div class="card-body">

                    <?php if(empty($usuario) && $_POST){
                    echo "¡Algo salió mal! Usuario o contraseña incorrecta.";}?>

                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <label for="usuarioInput" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuarioInput" name="usuario" value="<?= (isset($usuarioPost))?$usuarioPost:""; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="passwordInput" class="form-label">Password</label>
                            <input type="password" class="form-control" id="passwordInput" name="password" value="<?= (isset($passwordPost))?$passwordPost:""; ?>">
                        </div>
                        <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                </div>
                </div>

            </div>
        </div>
    </div>
</body>

<style>

.loginContainer{
    width: 30%;
    margin-top: 150px;
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