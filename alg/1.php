<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/24
 * Time: 16:01
 * 桶排序：把相对应的值放在相对应的桶里
 */
function sort1(){
    $a = array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0);
    $arr = array(5,8,7,9,5,3);

    foreach($arr as $k=>$v){
        $a[$v]++;
    }

    var_dump($a);

//    foreach($a as $k=>$v){
//        if($v > 0){
//            for($j=0;$j<$v;$j++){
//                echo $k;
//            }
//        }
//    }

    for($i=11;$i>=0;$i--){
        for($j=1;$j<=$a[$i];$j++){
            echo $i;
        }
    }
}
sort1();