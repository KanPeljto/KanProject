<?php

require_once __DIR__ . "/../dao/CommentsDAO.class.php";
require_once __DIR__ . "/../../../vendor/autoload.php";
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class CommentsService{
    private $comment_dao;

    public function __construct(){
        $this->comment_dao= new CommentsDao();
    }

    public function get_comments($articleID){
        $comment= $this->comment_dao->get_comments($articleID);
        return json_encode(array('comments'=>$comment));
    }

    public function add_comment($articleID,$comment){
        $jwt = isset($_COOKIE["jwt"]) ? $_COOKIE["jwt"] : '';
    
        if ($jwt) {
            $decoded = JWT::decode($jwt, new Key("UsirqZajXOvEZMy0wYf4yffugnjVS7IB9IgA9e8/qVg=", 'HS256'));
            $username = $decoded->data->username;
        } else {
            throw new Exception("JWT not found");
        }
    
        $data = array(
            'article_id' => $articleID,
            'comment' => $comment,
            'username' => $username
        );
    
        $added_comment = $this->comment_dao->add_comment($data);
    
        return json_encode(array('comments'=>$comment));
    }
    
}