<?php

define('APP',__DIR__);

include "connect.php";
include "schema.php";

// coger mediante POST el usuario y contraseña
$user = filter_input(INPUT_POST, "name");
$pass = filter_input(INPUT_POST, "pass");

// Checkboxs del registro y de guardar los datos
$reg = filter_input(INPUT_POST, "reg");
$save = filter_input(INPUT_POST, "save");

$base = connectSqlite('usuarios');

// si el usuario o la contraseña estan vacios avisa que uno de los 2 estan vacios
if ($user != null || $pass != null) {

    // ver si quiere registrarse, en caso de TRUE crea el usuario, en caso contrario mira si existe el usuario
    if(isset($reg)){
        insertItems($base, $user, $pass);
        echo "USUARIO REGISTRADO";
    }else{
        // busca en la base de datos si esta el usuario con la contraseña
        $command2 = "SELECT * FROM usuarios WHERE name='$user' AND password='$pass'";
        try{
            $exists = $db->exec($command2);
            // en caso de que encuentre una fila despues del SELECT se da por hecho que existe dicho usuario
            if (sqlite_num_rows($exists) == 1){
                // comprobamos si quiere guardar el usuario y la contraseña en cookies, en caso de TRUE crea las cookies, si no inicia sesion normal
                if(isset($save)){
                    setcookie('name', $user);
                    setcookie('pass', $pass);
                }else{
                    echo "SESION INICIADA";
                }                

            }else{
                echo "NO EXISTE EL USUARIO";
            }
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
} else {
    echo "El usuario o la contraseña estan vacios";
    header('Location: /login');
}