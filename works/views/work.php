<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>小董君作品集</title>
    <link rel="stylesheet" href="../assets/style/main.css">
</head>
<body>
<form action="../db/db.php" method="post">
    <div>
        <label for="title">作品名：</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="intro">作品简介：</label>
        <input type="text" name="intro" id="intro"><br>
    </div>
    <div>
        <label for="pic">作品大图：</label>
        <input type="text" name="pic" id="pic"><br>
    </div>
    <div>
        <label for="link">在线演示地址：</label>
        <input type="text" name="link" id="link"><br>
    </div>
    <div>
        <label for="github">代码地址：</label>
        <input type="text" name="github" id="github"><br>
    </div>

    <input type="submit" value="提交">
</form>
</body>
</html>