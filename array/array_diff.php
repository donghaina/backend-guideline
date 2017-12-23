<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/20
 * Time: 下午9:14
 */

$array1 = [
    'a'=>'red',
    'b'=>'green',
    'c'=>'white',
    'd'=>'black'
];

$array2 = [
    'd'=>'red',
    'e'=>'white',
    'f'=>'black'
];

$result = array_diff($array1,$array2);
print_r($result);


