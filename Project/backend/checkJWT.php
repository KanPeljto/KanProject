<?php

require_once __DIR__ . "/../../vendor/autoload.php";
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


function checkJwt(){
    $jwt =$_COOKIE["jwt"];
    if (!$jwt){
        Flight::halt(401, 'No jwt token');
    }
}

//github wont commit so im adding this to trick it