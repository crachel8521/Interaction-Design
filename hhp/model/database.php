<?php
	$database = 'hhp';
	$host = 'localhost';
    $dsn = 'mysql:host=localhost;dbname=hhp';
    $dbUserName = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$host; dbname=$database", $dbUserName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
				include('errors/database_error.php');
        exit();
    }
?>
