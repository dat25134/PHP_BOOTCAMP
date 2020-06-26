<?php
$servername = "localhost";
$database = "library";
$username = "root";
$password = "Dat25134";
$link = mysqli_connect($servername, $username, $password, $database);
$categorycode = (int)$_GET['id'];
function deleteCategory($link,$categorycode){
    $querySearch = "SELECT idBooks,idTypeBooks FROM library.books inner join typebooks on TypeBooks_idTypeBooks = idTypeBooks where idTypeBooks=$categorycode";
    $result = mysqli_query($link,$querySearch);
    $arrayCon = [];
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($arrayCon, $row);
        }
    }
    foreach ($arrayCon as $value){
        $queryDelete = "DELETE FROM `library`.`books` WHERE (`idBooks` = $value[0])";
        mysqli_query($link, $queryDelete) or die("Xóa dữ liệu thất bại!!! Sách đang được mượn!!!");
    }
    $query = "DELETE FROM `library`.`typebooks` WHERE (`idTypeBooks` = $categorycode)";
    mysqli_query($link, $query) or die("Xóa dữ liệu thất bại!!! Sách đang được mượn!!!");
    echo "<script>alert('Xóa thành công');</script>";
}
deleteCategory($link,$categorycode);
header("Location: http://localhost/CODEGYM/PHP_BOOTCAMP/library/database/displaycategory.php");
die();
?>