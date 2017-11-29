<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/13
 * Time: 8:29
 */
function showTable($table_name){
    $mysqli = new MySQLi('localhost','root','','learn');
    if($mysqli->connect_error){
        die($mysqli->connect_error);
    }
    $sql = "select * from ".$table_name;
    $res = $mysqli->query($sql);
    echo "共有{$res->num_rows}行{$res->field_count}列";
    echo "<table><tr>";
    while($field = $res->fetch_field()){
        echo "<th>{$field->name}</th>";
    }
    echo "</tr>";
    while($row = $res->fetch_array()){
        echo "<tr>";
        foreach($row as $v){
            echo "<td>$v</td>";
        }
        echo "</tr>";
    }
    $res->free();
    $mysqli->close();
}
showTable("user1");