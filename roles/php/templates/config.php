<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    $serverName = '{{ rds_db_hostname }}';
    $username = '{{ rds_db_user }}';
    $password = '{{ rds_db_password }}';
    $dbName = '{{ rds_db_name }}';

    // Create a new mysqli connection. Remember to enable this in php.ini !!
    $conn = new mysqli($serverName, $username, $password, $dbName);