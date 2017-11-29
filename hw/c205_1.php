<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/19
 * Time: 10:57
 */
$num = $_POST['num'];
$num1 = rand(0,2);
if($num > $num1){
    echo "you win";
}else{
    echo "you lose";
}