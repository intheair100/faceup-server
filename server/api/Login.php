//负责登录逻辑校验。
<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 17/6/22
 * Time: 下午5:10
 */
$username = $_POST['username'];
$password = $_POST['password'];
$data = null;
$isError = null;
$isPassordError = true;
$isUserNameError = true;
$sql = "SELECT id,username,password,nickname FROM `users` WHERE username = '$username'";
$sqlResult = $mysql->query($sql);
while ($row = mysqli_fetch_array($sqlResult)){
    if ($password =  $row['$password']){
        $data['id'] = $row['id'];
        $data['username'] = $row['username'];
        $data['nickname'] = $row['nickname'];
    }else{
        $isPassordError = true;
    }
    $isUserNameError = true;
}

if ($isUserNameError){
    returnData("用户名错误",1001,$data);
}else if ($isPassordError){
    returnData("密码错",1002,$data);
}else
{
    returnData("登录成功",0,$data);
}

?>