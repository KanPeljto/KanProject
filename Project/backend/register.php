<?php

require_once __DIR__ . "/../backend/rest/services/UserService.class.php";

$user_service= new UserService();

$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$result=$user_service->register_user($username,$email,$password);

if ($result){
    echo 'Registaration successuful!';
} else
{
    echo "Error occured during registration";
}