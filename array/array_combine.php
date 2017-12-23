<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/20
 * Time: 下午9:07
 */

$names = ['Peter','Jack','Anne'];

$ages = [35,20,18];

$combined_array = array_combine($names,$ages);

print_r($combined_array);