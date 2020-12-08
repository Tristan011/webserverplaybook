<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    $serverName = '{{ rds_db_name }}';
    $username = '{{ rds_db_name }}';
    $password = '{{ rds_db_name }}';
    $dbName = '{{ rds_db_name }}';

    // Create a new mysqli connection. Remember to enable this in php.ini !!
    $conn = new mysqli($serverName, $username, $password, $dbName);