<?php

require __DIR__ . "/../../../vendor/autoload.php";
require_once __DIR__ . "/../../login.php";

Flight::route("POST /user/login", function(){
    $email = Flight::request()->data['email'];
    $password = Flight::request()->data['password'];

    loginUser($email,$password);
    
});

Flight::route('GET /hi', function() {
    echo 'Works';
});

Flight::start();