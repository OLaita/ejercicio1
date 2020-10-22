<?php

    ini_set('display_errors','On');
    //configuracion entorno
    define('APP',__DIR__);
    require APP.'/src/route.php';
    require 'connect.php';
    require APP.'/src/schema.php';

    session_start();

    //Base de datos
    $base=connectSqlite('usuarios');
    schemaGenerator($base, "users");
    //insertItems($base, 'user1', 'user1');

    //sistema de enrutamiento
    $controller = getRoute();

    //redirigir a ruta adecuada
    //require controlador
    require APP.'/controllers/'.$controller.'.php';

    //header("Location: profile");