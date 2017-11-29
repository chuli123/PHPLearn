<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/29
 * Time: 8:32
 */
//识别文件末尾
$fh = fopen("1.txt","r");
while(!feof($fh)){
    echo fgets($fh);
}
fclose($fh);