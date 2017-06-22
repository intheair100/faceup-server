<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 17/6/21
 * Time: 下午9:01
 */
$db_host = "localhost";
$db_name = "123456halohiLY###";
$db_user = "root";
$db_password = "123456";

$mysql = new mysqli($db_host,$db_user,$db_password,$db_name);
if (mysqli_connect_errno()){
    die("unable to connect!").mysqli_connect_errno();
}
$mysql->set_charset("utf8");
?>