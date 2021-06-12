<?php

namespace app\controladores;

use app\modelos\Usuario;

require_once "config/autoload.php";

class ControladorUsuario
{
    public function guardar($username, $password)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $usuario = new Usuario($username, $password);
        if ($usuario->crear() != 0) {
            header("location: index.php?s");
        } else {
            header("location: usuarioCrear.php?s");
        }

    }

    public function login(String $username, String $password){
        $usuario= new Usuario();
        $usuario->setUsername($username);
        $datos = $usuario->traerdatos();
        if ($datos!=null){
            $passbd = null;
            foreach ($datos as $datosbd){
                $passbd = $datosbd["password"];
            }
            if($password==$passbd){
                session_start();
                $_SESSION["autentificado"] = "bienvenido";
                header("location:bienvenido.php");
            }else{
                echo "usuario y/o contraseña no encontrados";
            }
        }else{
            echo "usuario y/o contraseña no encontrados";
        }
    }
}