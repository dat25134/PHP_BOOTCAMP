<?php
include_once "../layout/header.php";
?>
    <h3> Borrows </h3>
    <table>
        <tr>
            <th>BookName</th>
            <th>StudentName</th>
            <th>Ngày mượn</th>
            <th>Ngày trả</th>
        </tr>
<?php
$servername = "localhost";
$database = "library";
$username = "root";
$password = "Dat25134";
$link = mysqli_connect($servername, $username, $password, $database);
function displayborrow($link)
{
    $table = '';
    // $table = "<table>";
    // $table .= "<tr><th>BookName</th><th>StudentName</th><th>Ngày mượn</th><th>Ngày trả</th></tr>";
    $query = "SELECT students.name,books.name,borrowDate,payDate FROM library.borrows inner join students on students.idStudents = borrows.Students_idStudents inner join books on books.idBooks = borrows.Books_idBooks";
    $array = [];
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($array, $row);
        }
    }
    foreach ($array as $key => $val) {
        $table .= "<tr><td>$val[0]</td><td>$val[1]</td><td>$val[2]</td><td>$val[3]</td></tr>";
    }
    $table .= '</table>';
    return $table;
}
// echo '<h3> Borrows </h3>';
echo displayborrow($link);
include_once "../layout/footer.php";
?>