<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/10
 * Time: 8:21
 * 预处理
 */
$mysqli = new MySQLi("localhost","root","","learn");
if($mysqli->connect_error){
    die($mysqli->connect_error);
}
$sql = "select id,name,email from user1 where id>?";
$mysqli_stmt = $mysqli->prepare($sql);
$id = 2;
$mysqli_stmt->bind_param("i",$id);
$mysqli_stmt->bind_result($id,$name,$email);
$mysqli_stmt->execute();
while($mysqli_stmt->fetch()){
    echo "$id----$name----$email";
}
$mysqli_stmt->free_result();
$mysqli_stmt->close();
$mysqli->close();