<?php
include_once "../layout/header.php";
$servername = "localhost";
$database = "library";
$username = "root";
$password = "Dat25134";
$link = mysqli_connect($servername, $username, $password, $database);
function displayCategory($link)
{
    $table = "<table>";
    $table .= "<tr><th>TypeCode</th><th>TypeName</th><th></th></tr>";
    $query = "SELECT * FROM library.typebooks";
    $array = [];
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($array, $row);
        }
    }
    foreach ($array as $key => $val) {
        $table .= "<tr><td>$val[0]</td><td>$val[1]</td><td><a href='editcategory.php?id=$val[0]'>Update</a> <a href='deletecategory.php?id=$val[0]'>Delete</a></td></tr>";
    }
    $table .= '</table>';
    return $table;
}
echo '<h3> Category </h3>';
echo displayCategory($link);
echo "<a href='addcategory.php'>Add New Category</a>";
include_once "../layout/footer.php";
?>
