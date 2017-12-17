<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello world</title>
</head>
<body>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    ?>
    <h3>strpos() 肯定没有返回假 (FALSE)</h3>
    <p>正在使用 Internet Explorer</p>
    <?php
} else {
    ?>
    <h3>strpos() 肯定返回假 (FALSE)</h3>
    <h3>没有使用 Internet Explorer</h3>
    <?php
}
?>
</body>
</html>