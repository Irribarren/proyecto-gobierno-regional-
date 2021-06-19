<?php

use app\controladores\ControladorUsuario;
require_once 'Model/conexion.php';
require_once 'Model/autocarga.php';

?>
    <div class="container">


        <?= (isset($_GET["s"]) ? "Usuario Creado" : "") ?>
        <div class="text-center">
            <h1>Login</h1>
        </div>
        <div class="d-flex justify-content-center">
            <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
                <div class="mb-2">
                    <input class="form-control" type="text" name="username" placeholder="Ingrese codigo en carnet">
                </div>
                <div class="mb-2">
                    <input class="form-control" type="password" name="password" placeholder="Ingrese Contraseña">
                </div>
                <div class="text-center d-grid gap-2">
                    <input class="btn btn-primary" type="submit" name="submit" value="Ingresar" href="bienvenido.php" >
                    <a href="usuarioCrear.php">Registrate</a>
                </div>
            </form>
        </div>



