<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/28
 * Time: 8:48
 * 计算文件、目录和磁盘的大小
 */
//确定文件的大小
$file = "1.txt";
$bytes = filesize($file);
echo $bytes;

