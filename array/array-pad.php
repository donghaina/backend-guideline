<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/18
 * Time: 上午11:50
 */

$array = ['apple','banana','cherry'];
$array = array_pad($array,5,'');

print_r($array);
echo '<br>';
array_splice($array,3);

print_r($array);