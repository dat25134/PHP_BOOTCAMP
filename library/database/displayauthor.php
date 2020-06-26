<?php
include_once "../layout/header.php";
$servername = "localhost";
$database = "library";
$username = "root";
$password = "Dat25134";
$link = mysqli_connect($servername, $username, $password, $database);
function displayauthor($link)
{
    $table = "<table>";
    $table .= "<tr><th>Author</th><th>Số lượng sách của tác giả</th></tr>";
    $query = "SELECT author,count(author) as SL FROM library.books group by author";
    $array = [];
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($array, $row);
        }
    }
    foreach ($array as $key => $val) {
        $table .= "<tr><td>$val[0]</td><td>$val[1]</td></tr>";
    }
    $table .= '</table>';
    return $table;
}
echo '<h3> Author </h3>';
echo displayauthor($link);
include_once "../layout/footer.php";
?>