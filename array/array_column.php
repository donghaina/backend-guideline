<?php
/**
 * Created by PhpStorm.
 * User: taosang1992
 * Date: 2017/12/20
 * Time: 下午9:05
 */

$array = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);

$last_names = array_column($array,'last_name','id');

print_r($last_names);