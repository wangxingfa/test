<?php
require "vendor/autoload.php";
$arr=["name"=>"louis","gender"=>"female"];

$json_str=Mytools\Tools::arrayToJson($arr);

echo $json_str;