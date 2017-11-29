<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/7
 * Time: 8:32
 * mysqli批量操作
 */
$mysqli = new MySQli('localhost','root','','learn');
if($mysqli->connect_error){
    die($mysqli->connect_error);
}
$sqls="insert into user1(name,password,email,age) values('aa','aaa','aa@qq.com',15);";
$sqls.="insert into user1(name,password,email,age) values('bb','bb','bb@qq.com',18);";
$sqls.="insert into user1(name,password,email,age) values('cc','cc','cc@qq.com',25)";
$b=$mysqli->multi_query($sqls);
if(!$b){
    echo "fail";
}else{
    echo "success";
}
$mysqli->close();