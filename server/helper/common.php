<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 17/6/22
 * Time: 下午2:17
 */

//返回给客户端的数据
function returnData($msg,$code,$data){
    $result['msg'] = $msg;
    $result['code'] = $code;
    if ($data){
        $result['data'] = $data;
    }
    $json = JSON($result);
    return $json;
}

//返回msg信息
function returnMsg($msg, $code){
    $result['msg'] = $msg;
    $result['code'] = $code;
    $json = JSON($result);
    return $json;
}
?>