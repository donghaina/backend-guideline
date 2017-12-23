<?php
/**
 * 定义数组
 */
$news_list1 = ['news1','news2','news3'];
$news_list2 = array('news1','news2','news3');
$news_list3 = array(
    10 => 'news1',
    1 => 'news2',
    2 => 'news3'
);

print_r($news_list1);
echo '<br>';
print_r($news_list2);
echo '<br>';
print_r($news_list3);
echo '<br>';

$news_list3[] = 'news4';
print_r($news_list3);
echo '<br>';

$news_list1[0] = 'news1-1';
print_r($news_list1);
echo '<br>';

unset($news_list2[0]);
print_r($news_list2);
echo '<br>';

echo '<h1>遍历$news_list1</h1>';
foreach ($news_list1 as $value){
    echo $value.'<br>';
}
echo '$news_list1的长度'.count($news_list1);
echo '<h1>遍历$news_list2</h1>';
foreach ($news_list2 as $key=>$value){
    echo $key.'=>'.$value.'<br>';
}
echo '$news_list2的长度'.count($news_list2);
echo '<h1>遍历$news_list1</h1>';
foreach ($news_list3 as $value){
    echo $value.'<br>';
}
echo '$news_list3的长度'.count($news_list3);