<?php

require_once "BaseDAO.class.php";

class CommentsDao extends BaseDao{
    public function __construct(){
        parent::__construct('comments');
    }

    public function get_comments($articleID){
        $sql="SELECT * FROM comments WHERE article_id=". $articleID;
        $result=$this->get_result($sql);
        return $result;
    }
}