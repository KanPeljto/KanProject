<?php

require_once './rest/services/ViewsService.class.php';

$articleID=$_POST["article_id"];

$views_service= new ViewsService();

$result=$views_service->countClicks($articleID);