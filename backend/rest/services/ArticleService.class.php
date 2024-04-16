<?php

require_once __DIR__ . "/../dao/ArticleDAO.class.php";

class ArticleService{
    private $article_dao;
    public function __construct(){
        $this->article_dao=new ArticleDao();
    }
    public function get_article($article){
        return $this->article_dao->get_article($article);
    }
}