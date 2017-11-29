<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/19
 * Time: 11:58
 */
//第一种方法 7 23 14 3 12 17
$arr = array(15,45,8,25,34,5,74,3);
sort($arr);
$arr1 = array_shift($arr);
$arr2 = array_pop($arr);
$total = array_sum($arr);
$avg = $total/6;
echo $total."<br>".$avg;
echo "<br>";
foreach($arr as $v){
    $i[] = abs($v-$avg);
}
//print_r(array_keys($i,max($i)));
//print_r(array_keys($i,min($i)));
$po = array_search(max($i),$i);
echo $arr[$po];

//查找最大值和最小值
//$arr1 = array(15,45,8,25,34,5,74,3);
//$pos = array_search(max($arr1),$arr1);
//$posm = array_search(min($arr1),$arr1);
//echo $arr1[$pos].",".$arr1[$posm];