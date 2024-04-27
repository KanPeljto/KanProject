<?php

require_once "./rest/services/UserService.class.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $password=$_POST["password"];
}

$user_service=new UserService();

$user=$user_service->login_user($email,$password);

if($user){
    echo 'Login successuful!';
    header("Location: http://localhost/KanProjectWeb/Project/public/index.html");
} else {
    echo 'Login failed';
}