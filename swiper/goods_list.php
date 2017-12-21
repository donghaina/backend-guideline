<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="../lib/css/swiper.min.css">

    <!-- Demo styles -->
    <style>
        html, body {
            position: relative;
            height: 100%;
        }
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color:#000;
            margin: 0;
            padding: 0;
        }
        .goods-list {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
        }
        .swiper-slide img{
            width: 100%;
        }
    </style>
</head>
<body>
<div id="index">
    <div class="swiper-container goods-list">
        <div class="swiper-wrapper">
            <a class="swiper-slide" v-for="(item,index) in carousel_list" :href="item.path">
                <img :src="item.pic" alt="item.title">
            </a>
        </div>
    </div>
</div>


<!-- Swiper JS -->
<script src="../lib/js/vue.js"></script>
<script src="../lib/js/swiper.min.js"></script>
<!-- Initialize Swiper -->
<script>

</script>
<script>
    var index = new Vue({
        el: '#index',
        data: {
            current_index: 0,
            carousel_list: [
                {
                    title: 'Hello world',
                    pic: 'http://orkimejsz.bkt.clouddn.com/pic01.jpg',
                    path: 'http://orkimejsz.bkt.clouddn.com/pic01.jpg'
                },
                {
                    title: 'Hello world',
                    pic: 'http://orkimejsz.bkt.clouddn.com/pic02.jpg',
                    path: 'http://orkimejsz.bkt.clouddn.com/pic01.jpg'
                },
                {
                    title: 'Hello world',
                    pic: 'http://orkimejsz.bkt.clouddn.com/pic03.jpg',
                    path: 'http://orkimejsz.bkt.clouddn.com/pic01.jpg'
                },
                {
                    title: 'Hello world',
                    pic: 'http://orkimejsz.bkt.clouddn.com/pic04.jpeg',
                    path: 'http://orkimejsz.bkt.clouddn.com/pic01.jpg'
                },
                {
                    title: 'Hello world',
                    pic: 'http://orkimejsz.bkt.clouddn.com/pic05.jpg',
                    path: 'http://orkimejsz.bkt.clouddn.com/pic01.jpg'
                }
            ]
        },
        methods: {
            initBanner:function () {
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    freeMode: true
                });
            }
        }
    })
</script>
<script>
    index.initBanner()
</script>
</body>
</html>
