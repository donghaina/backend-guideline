<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM works";
$result = mysqli_query($conn, $sql);

$works_list = [];
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $works_list[] = [
          'title'=>  $row["title"],
          'intro'=>  $row["intro"],
          'pic'=>  $row["pic"],
          'link'=>  $row["link"],
          'github'=>  $row["github"]

        ];
    }
    echo(json_encode($works_list));
} else {
    echo "0 results";
}

mysqli_close($conn);