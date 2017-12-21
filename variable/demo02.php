<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/17
 * Time: 上午9:01
 */

// 双引号中的变量可以被识别，在需要解析变量时再使用双引号，因为它的效率不高；单引号不解析变量，因此效率高，尽量用单引号

$newsTitle1 = 'tao-sang';
$newsTitle2 = 'is a student';
$newsTitle3 = "TS$newsTitle1";
$newsTitle4 = "小董君";
echo $newsTitle1.$newsTitle2.$newsTitle3;

echo '<br>';
echo strlen($newsTitle1);
echo '<br>';
echo mb_strlen($newsTitle4);
echo '<br>';
$null = null;
var_dump($null);
echo '<br>';
$name = 'jack';
echo $name;
echo '<br>';
unset($name);
echo $name;
