<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'samgray';

/*** mysql password ***/
$password = 'qhfQpSI1nQ6@qd0v';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=samgray_netmatters", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>