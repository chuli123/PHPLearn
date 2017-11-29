<?php
$data = array('a','b','c');
//$data = ['a','b','c'];
foreach($data as $key=>$val){
    $val = &$data[$key];
    print_r($data);exit;
}