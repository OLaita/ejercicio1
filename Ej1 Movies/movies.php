<?php

$pelis=[
    ["Titulo"=>"Explota Explota", "Protagonista"=>"Ingrid García", "Año"=>"2020"],
    ["Titulo"=>"Greenland", "Protagonista"=>"Gerard Butler", "Año"=>"2020"],
    ["Titulo"=>"Pinocho", "Protagonista"=>"Federico Ielapi", "Año"=>"2020"]
];

$p = $_GET['movieName'];

if(isset($_GET['movieName']) && isset($_GET['movieStar'])){
    foreach($pelis as $row){
        foreach($row as $key=>$value){
                if(in_array($p, $pelis, TRUE)){
                    $mostrar = "Hola";
                }else {
                    $mostrar = "Adios";
                }
                
            }
            

            //$mostrar = $_GET['Titulo']." a protagonizado la pelicula ".$_GET['Titulo']." que se produjo en ".$value;
        
    }
}else{
    $mostrar = "Pon algo en la url";
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Informacion sobre la pelicula <?= $_GET['Titulo'] ?></h1>
<h4>Basado en tu entrada, aqui tienes la informacion:<h4>

<h4><?= $mostrar ?></h4>
    
</body>
</html>