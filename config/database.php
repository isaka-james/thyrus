<?php

$DATABASE_NAME="maindb";
$SERVERNAME="localhost";
$DB_USERNAME="root";
$DB_PASSWORD="";


$db_config = [
    'dsn' => 'mysql:host='.$SERVERNAME.';dbname='.$DATABASE_NAME.';charset=utf8',
    'username' => $DB_USERNAME,
    'password' => $DB_PASSWORD,
];

return $db_config;