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
            color: #000;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        .swiper-container {
            width: 100%;
            height: 300px;
            background-color: #ffccff;
        }

        .swiper-slide {
            display: block;
            position: relative;
            height: 200px;
            text-align: center;
            font-size: 18px;
            background: #fff;
        }
        .swiper-slide img{
            width: 100%;
            height: 200px;
        }
        .swiper-slide .mask {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 40px;
            line-height: 40px;
            color: #ffffff;
            background-color: rgba(0, 0, 0, .7);
            border-radius: 0 0 5px 5px;
            display: none;
            z-index: 100;
        }

        .swiper-slide-active {
            height: 250px;
        }

        .swiper-slide-active img{
            height: 250px;
        }

        .swiper-slide-active .mask {
            display: block;
        }

        .swiper-wrapper {
            width: inherit;
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
<div id="index">
    <!-- Swiper -->
    <h1><span id="current_index">{{current_index}}</span>/<span>{{carousel_list.length}}</span></h1>
    <div class="swiper-container banner">
        <div class="swiper-wrapper">
            <a class="swiper-slide" v-for="(item,index) in carousel_list" :href="item.path">
                <img :src="item.pic" alt="item.title">
                <div class="mask">{{item.title}}</div>
            </a>
        </div>
    </div>
</div>


<!-- Swiper JS -->
<script src="../lib/js/vue.js"></script>
<script src="../lib/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
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
                var self = this
                var current_index = document.getElementById('current_index');
                var swiper = new Swiper('.banner', {
                    slidesPerView: 1.2,
                    initialSlide: 2,
                    spaceBetween: 10,
                    centeredSlides: true,
                    autoplay: {},
                    loop: true,
                    on: {
                        transitionStart: function () {
                            if (this.activeIndex === self.carousel_list.length) {
                                self.current_index = self.carousel_list.length;
                            } else if (this.activeIndex === (self.carousel_list.length+1)) {
                                self.current_index = 1;
                            } else {
                                self.current_index = this.activeIndex;
                            }
                        }
                    }
                });
            }
        }
    })
</script>
<script>
    index.initBanner();
</script>
</body>
</html>