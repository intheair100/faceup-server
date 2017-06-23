//负责注册逻辑。
<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 17/6/23
 * Time: 下午8:51
 */
$username = $_POST["username"];
$password = $_POST["password"];
$isError = false;
$sql = null;

$sql = "select id from 'users' where username = $username"
$sqlResult = $mysql->query($sql);
if (mysql_num_rows($sqlResult)){
    returnData("用户名已经注册",2001);
}else{
    $sql = null;
    $sql = "insert into users (username,password) values('$username','$password')";
    $sqlResult = $mysql->query(sql);
    if (!empty($sqlResult)){
        returnData("注册成功",0)
    }else{
        returnData("注册失败",2002);
    }
}
?>