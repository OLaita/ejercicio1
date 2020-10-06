<?php 
    declare(strict_types=1);

    function factorial(int $n){
        $result = gmp_fact($n);;
    }

?>