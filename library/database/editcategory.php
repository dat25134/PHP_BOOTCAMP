<?php
include_once "../layout/header.php";
?>
<form action="editcategory.php" method="POST">
    <h3>Edit Category</h3>
    <table>
    <tr>
        <td><label for="category">Category Edit</label></td>
        <td><input type="text" name="category"></td>
    </tr>
    <tr>
        <td><label for="categorycode">CategoryCode Edit</label></td>
        <td><input type="text" name="categorycode" value="<?php if (isset($_GET['id']))echo $_GET['id']?>" hidden></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Edit" name="submit"> </td>
    </tr>
    </table>    
</form>
<?php
$servername = "localhost";
$database = "library";
$username = "root";
$password = "Dat25134";
$link = mysqli_connect($servername, $username, $password, $database);

function editCategory($link,$categorycode,$categoryEdit){
    $query = "UPDATE `library`.`typebooks` SET `TypeBookscol` = '$categoryEdit'  WHERE (`idTypeBooks` = $categorycode)";
    mysqli_query($link, $query) or die("Edit dữ liệu thất bại!!!");
    echo "<script>alert('Sửa thành công');</script>";
}
if (isset($_REQUEST['category']) && $_REQUEST['categorycode']){
    $categoryEdit = $_REQUEST['category'];
    $categorycode = (int)$_REQUEST['categorycode'];
    editCategory($link,$categorycode,$categoryEdit);
} else {
    echo " <h5>Nhập thông tin edit</h5>";
}
include_once "../layout/footer.php";
?>