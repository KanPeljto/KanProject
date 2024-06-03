<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../../../vendor/autoload.php";
require_once __DIR__ . "/../../login.php";
require_once __DIR__ . "/../../add_comment_function.php";
require_once __DIR__ . "/../../checkJWT.php";


Flight::route("POST /user/login", function(){
    $raw_data = Flight::request()->getBody();
    $data = json_decode($raw_data, true);
    

    // if (isset($data['email']) && isset($data['password'])) {
    //     $email = $data['email'];
    //     $password = $data['password'];

    //     loginUser($email, $password);
    // } else {
    //     Flight::halt(400, 'Missing email or password');
    // }

    $email = $data['email'];
    $password = $data['password'];

    loginUser($email, $password);
});


Flight::route('GET /hi', function() {
    echo 'Works';
});


Flight::route('POST /add_comment', function() {
    $data = Flight::request()->data;
    $comment_text = $data->comment;
    $articleID = $data->articleID;
    $jwt = $_COOKIE["jwt"];

    $response = addComment($comment_text, $articleID, $jwt);
    Flight::json($response);
})->addMiddleware(checkJwt());


Flight::start();