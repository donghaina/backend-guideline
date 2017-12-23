<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/18
 * Time: 下午12:42
 */

$array1 = ['apple','logic','dell'];
$array2 = ['sony','hp','htc'];

$array = array_merge($array1,$array2);
//$array = $array1 + $array2;
print_r($array);

echo '<hr>';

$str = join(',',$array);

print_r($str);