<?php
	$database = 'id1201354_hhp';
	$host = 'ns01.000webhost.com';
    $dsn = 'mysql:host=id1201354_forum;dbname=id1201354_hhp';
    $dbUserName = 'id1201354_crachel';
    $password = 'rachelm8';

    echo "Test Connection: ";

    try {
        $conn = new PDO("mysql:host=$host; dbname=$database", $dbUserName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('errors/database_error.php');
        exit();
    }
?>
