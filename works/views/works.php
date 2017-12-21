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
<div id="app">
    <table>
        <tr>
            <th>作品名</th>
            <th>作品简介</th>
            <th>作品大图</th>
            <th>在线演示地址</th>
            <th>代码地址</th>
        </tr>
        <tr v-for="(work,index) in works_data" :key="index">
            <td>{{work.title}}</td>
            <td>{{work.intro}}</td>
            <td>{{work.pic}}</td>
            <td>{{work.link}}</td>
            <td>{{work.github}}</td>
        </tr>
    </table>
</div>
<script src="../../lib/js/vue.js"></script>
<script src="../../lib/js/axios.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>