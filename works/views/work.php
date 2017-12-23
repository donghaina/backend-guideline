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
<div id="work">
    <form :action="'../db/update_work.php?id='+work.id" method="post">
        <div>
            <label for="title">作品名：</label>
            <input type="text" name="title" id="title" v-model="work.title">
        </div>
        <div>
            <label for="intro">作品简介：</label>
            <input type="text" name="intro" id="intro" v-model="work.intro"><br>
        </div>
        <div>
            <label for="pic">作品大图：</label>
            <input type="text" name="pic" id="pic" v-model="work.pic"><br>
        </div>
        <div>
            <label for="link">在线演示地址：</label>
            <input type="text" name="link" id="link" v-model="work.link"><br>
        </div>
        <div>
            <label for="github">代码地址：</label>
            <input type="text" name="github" id="github" v-model="work.github"><br>
        </div>

        <input type="submit" @click="handleUpdate" value="提交"/>
    </form>
</div>
<script src="../../lib/js/vue.js"></script>
<script src="../../lib/js/axios.min.js"></script>
<script src="../assets/js/work.js"></script>
</body>
</html>