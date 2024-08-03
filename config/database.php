<?php

/*
* SET YOUR DATABASE  
*    CONFIGURATION
*       HERE!
*
*   nb: now only,
*   mysql is supported!!
*/ 

$SERVERNAME=getenv('SERVERNAME') ?: 'localhost';
$DATABASE_NAME=getenv('DB_NAME') ?: 'dbname';
$DB_USERNAME=getenv('DB_USERNAME') ?: 'root';
$DB_PASSWORD=getenv('DB_PASSWORD') ?: '';

/*
 * DATABASE CONFIGURATION
 *  Type this commands to save the,
 *   - servername, database name, database username, and password
 *   
 *  export DB_USERNAME='your_database_username'
 *  export DB_PASSWORD='your_database_password'
 *  export DB_NAME='your_database_name'
 *  export DB_SERVERNAME='your server name'
 */









$db_config = [
    'dsn' => 'mysql:host='.$SERVERNAME.';dbname='.$DATABASE_NAME.';charset=utf8',
    'username' => $DB_USERNAME,
    'password' => $DB_PASSWORD,
];

return $db_config;