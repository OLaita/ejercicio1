<?php

    // creacion de tabla
    function schemaGenerator(PDO $db, string $tableName){

        $command="
        CREATE TABLE IF NOT EXISTS ".$tableName."(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name VARCHAR(100) NOT NULL,
            password VARCHAR(100) NOT NULL
        )";
        try{
            $db->exec($command);
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }

    // añadir mas de un usuario con arrays
    function insertArray(PDO $db, $datos){

        if(is_array($datos)){
            foreach($datos as $row){
                foreach($row as $key=>$value){
                    if($key == "name"){
                        $user=$value;
                    }else{
                        $pass=$value;
                    }
                    $command2 = "INSERT INTO users (name,password) VALUES ('$user','$pass')";
                    try{
                        $db->exec($command2);
                    }catch(PDOException $e){
                        die($e->getMessage());
                    }
                }
            }    
        }

    }

    // crear usuarios 1 a 1
    function insertItems(PDO $db, string $user, string $pass){

        $command2 = "INSERT INTO users (name,password) VALUES ('$user','$pass')";
        try{
            $db->exec($command2);
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }

    // borrar usuarios
    function deleteItems(PDO $db, string $nameDelete){

        $command3 = "DELETE FROM users WHERE name='$nameDelete'";
        try{
            $db->exec($command3);
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }

    function tiempo(){
        $time = getdate();
        $time2 = $time[mday]."-".$time[mon]."-".$time[year].", ".$time[hours].":".$time[minutes].":".$time[seconds];
    }