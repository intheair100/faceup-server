<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 17/6/21
 * Time: 下午9:01
 */
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:x-requested-with,content-type,If-Modified-Since');
header("Content-type: application/json; charset=utf-8");

require "helper/arrayToJson.php";
require "helper/sqlHelper.php";
require "helper/common.php";

$postType = $_POST['if'];
switch ($postType){
    case "Login" : require "api/Login.php";
        break;
    case "Register":require "api/Register.php"
}
?>