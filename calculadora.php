<?php 
    declare(strict_types=1);

    function factorial(int $fact){
        $ffact = 1;
        while($fact >= 1){
            $ffact = $fact * $ffact;
            $fact--;
        }

        return $ffact;
    }

    function suma($suma){

        if(is_array($suma)){
            return array_sum($suma);
        }else{
            return "Para sumar necesito un array";
        }

    }

    function primer(int $number):bool{

        if ($number == 2 || $number == 3 || $number == 5 || $number == 7) {
            return True;
        }else {
            if ($number %2 != 0) {
                for ($i = 3; $i <= sqrt($number); $i += 2) {
                    if ($number % $i == 0) {
                        return False;
                    }
                }
                return True;
            }else{
                return False;
            }
        }

    }

    function performOperation(string $type, $arguments){

        switch($type){
            case "factorial":
                return factorial($arguments);
            break;
            case "sum":
                return suma($arguments);
            break;
            case "prime":
                return primer($arguments);
            break;
            default:
                return "factorial, sum, prime";
        }

    }

    $type = "prime";
    $arguments = 12;

    echo performOperation($type, $arguments);
    echo var_dump(performOperation($type, $arguments));



?>