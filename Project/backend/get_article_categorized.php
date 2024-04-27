<?php

require_once "./rest/services/ArticleService.class.php";

$article_service= new ArticleService();

$articleCategory = isset($_GET['category']) ? $_GET['category'] : '';
$result=$article_service->get_article_categorized($articleCategory);

echo $result;
