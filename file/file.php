<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/29
 * Time: 8:44
 */

//读取文件
$fe = file("1.txt");
foreach($fe as $v){
    list($name,$email) = explode(" ",$v);
    echo $name."====".$email."<br>";
}
echo "<br>";

//将文件内容读入字符串变量
$fcg = file_get_contents("1.txt");
echo $fcg;
echo "<br>";

//将csv文件写入数组
$fh = fopen("2.csv","r");
while(list($name,$email,$phone) = fgetcsv($fh,1024,',')){
    printf("<p>n:%s,e:%s,p:%s</p>",$name,$email,$phone);
}
echo "<br>";

//读取指定数目的字符
$f = fopen('1.txt','r');
while(!feof($f)){
    echo fgets($f);
}
fclose($f);
echo "<br>";

//从输入中剔除标签
//构建可接受的标签列表
//$tags = '<h2><h3><p><b><img><html><head>';
//$fl = fopen('a.html','r');
//while(!feof($fl)){
//    $a.= fgetss($fl,1024,$tags);
//}
//fclose($fl);
//echo "<br>";
//
//$fh = fopen('a.html','w');
//fwrite($fh,$a);
//fclose($fl);
//echo "<br>";

//以一次读取一个字符的方式读取文件
$fh = fopen("1.txt","r");
while(!feof($fh)){
    echo fgetc($fh);
}
fclose($fh);
echo "<br>";

//忽略换行符
$fh = fopen('1.txt','r');
$data = fread($fh,10);
fclose($fh);
echo $data;
echo "<br>";

//读取整个文件
$fh = "a.html";
$b = readfile($fh);
echo $b;
echo "<br>";

//根据预定义的格式读取文件
$fh = fopen("2.txt","r");
while($user = fscanf($fh,"%d-%d-%d")){
    list($part1,$part2,$part3) = $user;
    printf("p1:%d,p2:%d,p3:%d <br/>",$part1,$part2,$part3);
}
fclose($fh);
echo "<br>";
//将字符串写入文件
$str = "yy.com|qq.com";
$fh = fopen('2.txt',"a");
fwrite($fh,$str);
fclose($fh);