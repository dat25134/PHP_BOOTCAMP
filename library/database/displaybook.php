<?php
    include_once "../layout/header.php";
    $servername = "localhost";
    $database = "library";
    $username = "root";
    $password = "Dat25134";
    $link = mysqli_connect($servername, $username, $password, $database);
    $table = "<table>";
    $table .= "<tr><th>idBooks</th><th>name</th><th>TypeBookscol</th><th>author</th><th>pubDate</th></tr>";
    $query = "SELECT idBooks,name,typebooks.TypeBookscol, author, pubDate FROM library.books inner join typebooks on typebooks.idTypeBooks = books.TypeBooks_idTypeBooks";
    $array = [];
    $result = mysqli_query($link,$query);
    if (mysqli_num_rows($result)){
        while ($row = mysqli_fetch_array($result)){
          array_push($array,$row);

        }
    }
    foreach ($array as $key => $val){
        $table .= "<tr><td>$val[0]</td><td>$val[1]</td><td>$val[2]</td><td>$val[3]</td><td>$val[4]</td></tr>";
    }
    $table .= '</table>';
    echo '<h3> Books </h3>';
    echo $table;
    include_once "../layout/footer.php";
?>
