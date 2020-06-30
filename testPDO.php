<?php
$dns = "mysql:host=localhost;dbname=library";
$username = "root";
$password = "Dat25134";
$connect = new PDO($dns,$username,$password);
$query = 'SELECT * from books';
$result = $connect->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
    print_r($row) ;
}

?>