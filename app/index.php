<?php

    ini_set('display_errors','On');
    //configuracion entorno
    define('APP',__DIR__);
    require APP.'/src/route.php';
    require APP.'/src/databaseController/connect.php';
    require APP.'/src/databaseController/schema.php';

    session_start();

    //Base de datos
    $base=connectSqlite('usuarios');
    schemaGenerator($base, "users");

    //sistema de enrutamiento
    $controller = getRoute();

    //redirigir a ruta adecuada
    //require controlador
    require APP.'/controllers/'.$controller.'.php';