<?php

require_once __DIR__ . '/rest/services/CommentsService.class.php';

$comments_service= new CommentsService();

$articleID = isset($_GET['articleID']) ? intval($_GET['articleID']) : 0;
$result=$article_service->get_article($articleID);

echo $result;