<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/15
 * Time: 下午5:32
 */
$str = 'abcdef abcdef';
$find_me = 'a';
$pos = strpos($str,$find_me);

if($pos !== false){
    echo $pos;
}else{
    echo '不存在';
}

