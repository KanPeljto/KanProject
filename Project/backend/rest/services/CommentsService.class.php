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

    public function add_comment($articleID,$comment,$username){
        $added_comment= $this->comment_dao->add_comment($comment,$articleID,$username);
        return json_encode(array('comments'=>$comment));
    }
    
}