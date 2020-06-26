<?php
include_once "../layout/header.php";
$servername = "localhost";
$database = "library";
$username = "root";
$password = "Dat25134";
$link = mysqli_connect($servername, $username, $password, $database);
function displayStudent($link)
{
    $table = "<table>";
    $table .= "<tr><th>IDStudent</th><th>Name</th><th>Address</th><th>Phone</th><th>Email</th><th>Avatar</th></tr>";
    $query = "SELECT * FROM library.students;";
    $array = [];
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($array, $row);
        }
    }
    foreach ($array as $key => $val) {
        $table .= "<tr><td>$val[0]</td><td>$val[1]</td><td>$val[2]</td><td>$val[3]</td><td>$val[4]</td><td><img src='$val[5]'></td></tr>";
    }
    $table .= '</table>';
    return $table;
}
echo '<h3> Student </h3>';
echo displayStudent($link);
include_once "../layout/footer.php";
?>