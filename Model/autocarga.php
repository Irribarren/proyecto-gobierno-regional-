<?php
spl_autoload_register(function ($nombre_clase){
    include_once $nombre_clase.".php";
});
