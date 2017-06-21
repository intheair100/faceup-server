<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 17/6/21
 * Time: 下午9:01
 */
$mysql = new mysqli("localhost","root","123456","123456halohiLY###","faceloveEpoch");
if (mysqli_connect_errno()){
    die("unable to connect!").mysqli_connect_errno();
}
$mysql->set_charset("utf8");