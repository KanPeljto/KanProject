<?php

require_once __DIR__ . '/rest/services/CommentsService.class.php';

$comments_service= new CommentsService();

$articleID = isset($_GET['articleID']) ? intval($_GET['articleID']) : 0;
$result=$comments_service->get_comments($articleID);

echo $result;