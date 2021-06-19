<?php
class Conexion
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost:8111;dbname=gob_huanuco_pnp;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
?>
