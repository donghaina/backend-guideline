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

echo $_POST;
$title = $_POST['title'];
$intro = $_POST['intro'];
$pic = $_POST['pic'];
$link = $_POST['link'];
$github = $_POST['github'];


$sql = "INSERT INTO works (title, intro, pic, link, github) VALUES ('{$title}','{$intro}','{$pic}','{$link}', '{$github}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "Connected successfully";