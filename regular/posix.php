<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 8:04
 */
$name = "toM";
if(preg_match("/[^a-z]/",$name)){

    echo "all lower";
}else{
    echo "not all lower";
}

echo "<br>";