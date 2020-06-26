<?php
include_once "../layout/header.php";
?>
<form action="addcategory.php" method="POST">
    <h3>Add Category</h3>
    <table>
        <tr>
            <td><label for="category">Category</label></td>
            <td><input type="text" name="category"></td>
        </tr>
        <tr>
            <td><label for="categorycode">CategoryCode</label></td>
            <td><input type="text" name="categorycode"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Thêm mới" name="submit"> </td>
        </tr>
    </table>
</form>
<?php
$servername = "localhost";
$database = "library";
$username = "root";
$password = "Dat25134";
$link = mysqli_connect($servername, $username, $password, $database);
if (isset($_REQUEST['category']) && $_REQUEST['categorycode']) {
    $category = $_REQUEST['category'];
    $categoryCode = (int) $_REQUEST['categorycode'];
    $query = "INSERT INTO `library`.`typebooks` (`idTypeBooks`, `TypeBookscol`) VALUES ($categoryCode,'$category')";
    if ($link) {
        echo " Kết nối thành công";
    }
    mysqli_query($link, $query) or die("Thêm dữ liệu thất bại!!!");
    echo "<script>alert('Thêm thành công');</script>";
}
include_once "../layout/footer.php";
?>