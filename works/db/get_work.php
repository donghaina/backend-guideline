<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id = $_GET['id'];


$sql = "SELECT * FROM works WHERE id = ".$id;
$result = mysqli_query($conn, $sql);

$works_list = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $works_list[] = [
            'id' => $row['id'],
            'title' => $row["title"],
            'intro' => $row["intro"],
            'pic' => $row["pic"],
            'link' => $row["link"],
            'github' => $row["github"]

        ];
    }
    echo(json_encode($works_list[0]));
} else {
    echo "0 results";
}

mysqli_close($conn);