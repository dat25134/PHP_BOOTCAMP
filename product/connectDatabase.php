<?php
$dns = "mysql:host=localhost;dbname=product";
$username = "root";
$password = "Dat25134";
$connect = new PDO($dns, $username, $password);
$query = 'SELECT * from product';
$result = $connect->query($query);
$row = [];
$row = $result->fetchAll(PDO::FETCH_ASSOC);
?>