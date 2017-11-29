<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/14
 * Time: 8:55
 */
//验证日期
echo "Today".(checkdate(2,29,2017) ? 'valid':'invalid');
//输出的结果是 Today invalid
echo "<br>";

//将时间戳转为用户友好值
print_r(getdate(1274729324));
//输出的结果是  Array ( [seconds] => 44 [minutes] => 28 [hours] => 21 [mday] => 24 [wday] => 1 [mon] => 5 [year] => 2010 [yday] => 143 [weekday] => Monday [month] => May [0] => 1274729324 )
echo "<br>";

//确定当前时间戳
echo time();
//输出的结果是  1500856575
echo "<br>";

//根据特定日期和时间创建时间戳
echo mktime(15,35,00,5,24,2010);
//输出的结果是   1274708100
echo "<br>";

//显示网页最新修改日期
$lastmod = date('F d,Y h:i:sa',getlastmod());
echo $lastmod;
//输出的结果是 July 19,2017 02:47:10am
echo "<br>";

//确定当前月份的天数
printf("There are %s day in %s",date("t"),date("F"));
//输出的结果是 There are 31 day in July
echo "<br>";

//确定任意给定月份的天数  mktime(hour,minute,second,month,day,year,is_dst);
$lastday = mktime(0,0,0,2,5,2014);
printf("There are %s day",date("t",$lastday));
//输出的结果是  There are 28 day
echo "<br>";

//计算当前日期后X天的日期
$futureDate = strtotime("+45 day");
echo date("Y-m-d",$futureDate);
//输出的结果是   2017-09-03
echo "<br>";

//DateTime()构造函数
$date = new DateTime();
var_dump($date);
/*输出的结果是   object(DateTime)[1]
  public 'date' => string '2017-07-24 02:46:59' (length=19)
  public 'timezone_type' => int 3
  public 'timezone' => string 'Europe/Paris' (length=12*/
echo "<br>";

//格式化日期
echo $date->format("Y-m-d H:i:sa");
//输出的结果是   2017-07-24 02:49:14am
echo "<br>";

//实例化后设置日期
$date = new DateTime();
$date->setDate(2010,5,8);
echo $date->format("Y-m-d");
//输出的结果是  2010-05-08
echo "<br>";

//实例化后设置时间
$date = new DateTime();
$date->setTime(8,55);
echo $date->format("h:i");
//输出的结果是  08:55
echo "<br>";

//修改日期和时间
$date = new DateTime();
$date->modify("+24 hours");
echo $date->format("Y-m-d H:i:s");
//输出的结果是  2017-07-25 02:57:16
echo "<br>";

//计算两个日期之差
$a = new DateTime("2010-5-10");
$b = new DateTime('today');
$span = $a->diff($b);
echo $span->format('%d');
//输出的结果是   14