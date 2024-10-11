<?php 
$uri = $_SERVER['REQUEST_URI'];
$app_url = "http://localhost/practica/";
echo $uri;
if ($uri == "/practica/"){
    require_once 'inicio.php';
}elseif ($uri == "/practica/disenio/"){
    require_once 'disenio.php';
}elseif ($uri == "/practica/edicion/"){
    require_once 'edicion.php';
}