<?php

    function getRoute(){

        switch($_SERVER['REQUEST_URI']??'/'){
            case '/profile':
                return 'profile';
            case '/login':
               return 'login';
            case '/':
                return 'home';
            default:
                return 'home';
        }

    }