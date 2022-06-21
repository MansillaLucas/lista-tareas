<?php $tabName = "Bienvenido"; ?>
<?php
session_start();
if(!isset($_SESSION['logueado'])){
    header("location:index.php");
}
?>
<?php require_once "header.php" ?>

<body class="backgroundimageBody">

    <?php require_once "headbar.php" ?>

    <div class="container pageContainer">
        <div class="row">
            <div class="col text-centered">

                <div class="card bg-dark text-white">
                    <div class="card-header">
                        Bienvenidos
                    </div>
                    <div class="card-body">
                        Esta es mi página. Accedan a los menus del header para explorar.
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