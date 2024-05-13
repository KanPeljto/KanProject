<?php

require_once "./rest/services/UserService.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
}

$user_service = new UserService();


try {
    $user = $user_service->login_user($email, $password);
    if ($user) {
        $jwt=$user["jwt"];
        setcookie("jwt",$jwt,time() + (86400),"/");

        
        header("Location: http://localhost/KanProjectWeb/Project/public/index.php");
        exit();
    } else {
        throw new Exception("Login failed");
    }
} catch (Exception $e) {
    error_log($e->getMessage());
    echo "Login failed";
}