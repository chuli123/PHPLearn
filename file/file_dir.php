<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 8:23
 * 文件和目录
 */
//获取路径的的文件名
$path = "/home/www/data/user.txt";
//获取文件名和后缀
printf("fileName:%s",basename($path));
//获取文件名
printf("filename san extension:%s",basename($path,".txt"));
echo "<br>";

//获取路径的目录
printf("dir:%s",dirname($path));

echo "<br>";

//更多关于目录的信息
$pathinfo = pathinfo("/homw/www/chap/1.html");
//目录名
printf("dirname:%s",$pathinfo['dirname']);
echo "<br>";
//基本名
printf("basename:%s",$pathinfo['basename']);
echo "<br>";
//后缀名
printf("extension:%s",$pathinfo['extension']);
echo "<br>";
//文件名
printf("filename:%s",$pathinfo['filename']);

echo "<br>";
//确定绝对路径
$imgUlr = "../../image/conve.gif";
$abPath = realpath($imgUlr);
print_r($abPath);