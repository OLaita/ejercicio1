<?php

// Checkboxs del registro y de guardar los datos
$delCoo = filter_input(INPUT_POST, "delCoo");

if(isset($delCoo)){
    echo "hola";
    setcookie("name", "");
    setcookie("pass", "");
    setcookie("time", "");
    header('Location: /profile');
}
    


    