<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/18
 * Time: 上午11:30
 */

// 数组遍历
$fruits = [
    'red' => 'apple',
    'yellow' => 'banana',
    'orange' => 'orange',
    'brown' => 'dates'
];


foreach ($fruits as $key => $fruit) {
    echo "$key is $fruit" . '<br>';
}
echo '<hr>';
//生成索引值第一个为 1 的数组;

$presidents = [
    1 => 'Washington',
    'Adams',
    'Jefferson',
    'Madison'
];

foreach ($presidents as $key => $president) {
    echo "第 $key 位总统是 $president" . '<br>';
}
echo '<hr>';
// 将一系列整数赋值给一个数组

$cards = range(1, 54,2);

print_r($cards);

