<?php

$pelis=[
    ["Titulo"=>"Explota Explota", "Protagonista"=>"Ingrid García", "Año"=>"2020"],
    ["Titulo"=>"Greenland", "Protagonista"=>"Gerard Butler", "Año"=>"2020"],
    ["Titulo"=>"Pinocho", "Protagonista"=>"Federico Ielapi", "Año"=>"2020"]
];

$p = $_GET['movieName'];
$a = $_GET['movieStar'];
$bTitulo = false;
$bProta = false;
$bAño = false;

if(isset($_GET['movieName']) && isset($_GET['movieStar'])){

    foreach($pelis as $row){
        foreach($row as $key=>$value){
            if(array_search($p, array_column($pelis, 'Titulo')) && array_search($a, array_column($pelis, 'Protagonista'))){
                if($key == Titulo){
                    if($value == $p){
                        $pelicula = $value;
                        $bTitulo = true;
                    }
                }
                if($key == Protagonista){
                    if($value == $a){
                        $prota = $value;
                        $bProta = true;
                    }
                }
                if($bTitulo == true && $bProta == true){
                    if($key == Año && $bAño == false){
                        $año = $value;
                        $bAño = true;
                    }
                }
                $mostrar = $prota." a protagonizado la pelicula ".$pelicula." que se produjo en ".$año;
            }else{
                $mostrar = "No existe la pelicula o el protagonista";
            }
        }
    }
    
    
    
    //$mostrar = $_GET['Titulo']." a protagonizado la pelicula ".$_GET['Titulo']." que se produjo en ".$value;
        
    
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

<h1>Informacion sobre la pelicula <?= $_GET['movieName'] ?></h1>
<h4>Basado en tu entrada, aqui tienes la informacion:<h4>

<h4><?= $mostrar ?></h4>
    
</body>
</html>