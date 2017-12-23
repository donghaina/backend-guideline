<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/18
 * Time: 下午4:44
 */

// 自动类型转换规则
// true => 1;
// false => 0;
// null => 0;
echo 1 + true;  //  2
echo '<br>';
echo 1 + false; //  1
echo '<br>';
echo 1 + null;  //  1
echo '<br>';

// 浮点数与整数进行算数运算时，整数转浮点数再运算
var_dump(1+1.0);

echo '<br>';
// 参与算数运算的字符串，只有以数字开头的字符串才会被当成数字，可转；否则，会被转成0；
echo '2017ts' + 1;