<?php

require_once __DIR__ . "./BaseDAO.class.php";

class ArticleDao extends BaseDao{
    public function __construct(){
        parent::__construct('articles');
    }

    public function get_article($article){
        return $article;
    }
}