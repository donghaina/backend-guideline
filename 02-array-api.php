<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/17
 * Time: 上午10:10
 */

$news_list = array(
    array(
        'time' => '05-01',
        'title' => 'news1',
        'path' => 'https://www.jd.com/'
    ),
    array(
        'time' => '04-01',
        'title' => 'news2',
        'path' => 'https://www.jd.com/'
    ),
    array(
        'time' => '03-01',
        'title' => 'news3',
        'path' => 'https://www.jd.com/'
    ),
    array(
        'time' => '02-01',
        'title' => 'news4',
        'path' => 'https://www.jd.com/'
    ),
    array(
        'time' => '01-01',
        'title' => 'news5',
        'path' => 'https://www.jd.com/'
    ),
    array(
        'time' => '06-01',
        'title' => 'news6',
        'path' => 'https://www.jd.com/'
    ),
);

echo json_encode($news_list);