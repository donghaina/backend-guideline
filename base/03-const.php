<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/18
 * Time: 上午10:51
 */

define('COMPONY', 'ufutx');
echo COMPONY;

echo '<br>';
define('VIP_PRICE', 199);

echo VIP_PRICE;
echo '<br>';

var_dump(PHP_VERSION);
echo '<br>';

var_dump(PHP_OS);
echo '<br>';

var_dump(defined('VIP_PRICE'));

echo '<br>';
$user_name = 'ts';

var_dump(isset($user_name));