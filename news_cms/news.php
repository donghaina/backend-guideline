<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>小董君的作品集</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div id="app" v-cloak>
    <ul>
        <li v-for="(news,index) in news_data">
            <a :href="news.path" target="_blank" :key="index">{{news.title}}</a>
        </li>
    </ul>
</div>
<script src="../lib/js/vue.js"></script>
<script src="../lib/js/axios.min.js"></script>
<script src="main.js"></script>
</body>
</html>