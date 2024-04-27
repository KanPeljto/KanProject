<?php

require '../vendor/autoload.php';
require 'get_article.php';
require_once "./rest/services/ArticleService.class.php";


Flight::route('GET /get_article', function() {
    $article_service=new ArticleService();

    $articleID = isset($_GET['articleID']) ? intval($_GET['articleID']) : 0;
    $result=$article_service->get_article($articleID);
    
    echo json_encode($result);
});

Flight::start();