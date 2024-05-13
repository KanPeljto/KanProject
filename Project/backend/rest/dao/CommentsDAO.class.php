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

    public function add_comment($data){
        $sql = "INSERT INTO comments(article_id, comment, user_name) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("iss", $data['article_id'], $data['comment'], $data['username']);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}