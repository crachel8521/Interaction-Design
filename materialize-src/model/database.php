<?php
	$database = 'jasonh11_Pubfinder';
	$host = 'localhost';
    $dsn = 'mysql:host=localhost;dbname=jason11_Pubfinder';
    $dbUserName = 'jasonh11_pubfind';
    $password = 'pa55word';

    try {
        $db = new PDO("mysql:host=$host; dbname=$database", $dbUserName, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('errors/database_error.php');
        exit();
    }
?>
