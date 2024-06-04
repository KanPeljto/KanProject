<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL ^ (E_NOTICE | E_DEPRECATED));

// DB access
define('DB_NAME','kanwebdb');
define('DB_PORT',3306);
define('DB_USER','kanroot');
define('DB_PASSWORD','Root1234');
define('DB_HOST','kanwebdb.mysql.database.azure.com');
