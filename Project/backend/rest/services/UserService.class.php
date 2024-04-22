<?php

require_once __DIR__ . '/../dao/UserDAO.class.php';

class UserService{
    private $user_dao;

    public function __construct(){
        $this->user_dao=new UserDAO();
    }

    public function register_user($username,$email,$password){
        $hashed_pass=password_hash($password,PASSWORD_DEFAULT);
        return $this->user_dao->create_user($username,$email,$hashed_pass);
    }

}