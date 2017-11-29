<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/11
 * Time: 8:41
 */
//session_start();
//$_SESSION['username'] = 'Tom';
//printf("name is %s",$_SESSION['username']);
//unset($_SESSION['username']);
//printf("name is %s",$_SESSION['username']);

//编码会话数据
session_start();
$sid = session_id();
$_SESSION['name'] = "Tom";
$_SESSION['loggedon'] = date("Y-m-d H:i:s");
$a = session_encode();
echo $a;

//解码会话数据
session_decode($a);
echo $_SESSION['name'],$_SESSION['loggedon'];