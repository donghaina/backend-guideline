<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/20
 * Time: 下午8:54
 */
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");

print_r(array_chunk($cars,2));


// 最后一个参数的意思是是否保留原来的key值，我觉得最好还是保留。
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
print_r(array_chunk($age,2,true));
