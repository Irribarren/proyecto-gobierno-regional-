<?php

namespace app\modelos;

use config\ConexionBD;

require_once "config/autoload.php";

class Usuario
{
    private $username;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    private $password;

    public function crear()
    {
        try {
            $conexion = new ConexionBD();
            $cnx = $conexion->getConexion();
            $sql = "INSERT INTO usuarios(username, password) VALUES('$this->username', '$this->password')";
            $resultado = $cnx->exec($sql);
            $conexion->cerrar();
            return $resultado;
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function mostrar()
    {

    }

    public function existe(){
        {
            try {
                $conexion = new ConexionBD();
                $cnx = $conexion->getConexion();
                $sql = "SELECT password FROM usuarios WHERE username='$this->username';";
                $resultado = $cnx->query($sql);
                $conexion->cerrar();
                return $resultado;
            }catch (\PDOException $e){
                echo $e->getMessage();
            }
        }
    }

    public function traerdatos(){
        try {
            $conexionBD = new ConexionBD();
            $conn = $conexionBD ->abrir();
            $sql1 = "select password from usuarios where username=$this->username";
            $resultado= $conn-> query($sql1);
            $conexionBD->cerrar();
        } catch (\PDOException $e) {
            echo "hubo un error" . $e->getMessage();
            exit();
        }
        return $resultado;
    }
}

