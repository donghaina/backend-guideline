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
print_r($_POST);
$id = $_GET['id'];
$title = $_POST['title'];
$intro = $_POST['intro'];
$pic = $_POST['pic'];
$link = $_POST['link'];
$github = $_POST['github'];


$sql = "UPDATE works SET title = '{$title}', intro = '{$intro}', pic = '{$pic}', link = '{$link}', github = '{$github}' WHERE id = '{$id}'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);