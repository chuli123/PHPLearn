<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 17:27
 * 快速排序
 */
function quick_sort($arr){
    $len = count($arr);
    if($len <=1){
        return $arr;
    }

    $base_num = $arr[0];
    $left_array = array();
    $right_array = array();
    for($i=1;$i<$len;$i++){
        if($base_num>$arr[$i]){
            $left_array[] = $arr[$i];
        }else{
            $right_array[] = $arr[$i];
        }
    }

    $left_array = quick_sort($left_array);
    $right_array = quick_sort($right_array);
    var_dump($left_array);
    var_dump($right_array);
    return array_merge($left_array,array($base_num),$right_array);
}
$arr = array(5,8,7,5,1,4,3,15,41);
$arr1 = quick_sort($arr);
var_dump($arr1);
