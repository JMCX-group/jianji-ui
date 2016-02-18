<?php
/**
 * Created by PhpStorm.
 * User: why
 * Date: 16/2/18
 * Time: 下午6:40
 */

if(!isset($_GET["lng"]) || !isset($_GET["lat"])){exit();}
$lng = $_GET["lng"];
$lat = $_GET["lat"];
//初始化
$ch = curl_init();

//设置选项，包括URL
curl_setopt($ch, CURLOPT_URL, "http://api.map.baidu.com/geocoder/v2/?ak=8SWWYVWcaxBzGoLtioaSXB9A&location=$lat,$lng&output=json&coordtype=wgs84ll");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

//执行并获取HTML文档内容
$output = curl_exec($ch);

//释放curl句柄
curl_close($ch);

//打印获得的数据
echo $output;