<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$tmp = $num1;
//$num1 = $num2;
//$num2 = $tmp;
//echo $num1,$num2;
if($num1 > $num2){
    echo $num1,$num2;
}else{
    $tmp = $num2;
    $num2 = $num1;
    $num1 = $tmp;
    echo $num1,$num2;
}
?>