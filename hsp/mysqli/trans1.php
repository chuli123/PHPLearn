<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/8
 * Time: 8:34
 * 事务处理
 */
$mysqli = new MySQLi('localhost','root','','learn');
if($mysqli->connect_error){
    die($mysqli->connect_error);
}
$mysqli->autocommit(false);
$sql1 = "update account set balance=balance-2 where id=1";
$sql2 = "update account2 set balance=balance+2 where id=2";
$b1 = $mysqli->query($sql1);
$b2 = $mysqli->query($sql2);
if(!$b1||!$b2){
    //执行失败 回滚  即也不会执行任何一条语句 即使另一条语句是成功的
    echo "fail";
    $mysqli->rollback();
}else{
    echo "success";
    $mysqli->commit();
}