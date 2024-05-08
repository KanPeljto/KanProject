<?php

require_once __DIR__ . "/../dao/CommentsDAO.class.php";

class CommentsService{
    private $comment_dao;

    public function __construct(){
        $this->comment_dao= new CommentsDao();
    }

    public function get_comments($articleID){
        $comment= $this->comment_dao->get_comments($articleID);
        return json_encode(array('comments'=>$comment));
    }
}