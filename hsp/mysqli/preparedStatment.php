<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/9
 * Time: 9:03
 * 预处理
 */
//创建数据库对象
$mysqli = new MySQLi("localhost","root","","learn");
//创建编译对象
$sql = "insert into user1(name,password,email,age) values(?,?,?,?)";
$mysqli_stmt = $mysqli->prepare($sql);
//绑定参数
$name = "小倩";
$password = "123456";
$email = "123@qq.com";
$age = "41";
//绑定参数->给？赋值  类型和顺序都要对应
$mysqli_stmt->bind_param("sssi",$name,$password,$email,$age);
//执行
$b = $mysqli_stmt->execute();
if(!$b){
    die("fail".$mysqli_stmt->error);
}else{
    echo "success";
}
//释放
$mysqli->close();