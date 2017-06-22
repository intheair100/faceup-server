<?php
/**
 * Created by PhpStorm.
 * User: zp
 * Date: 17/6/22
 * Time: 下午2:18
 */

/**************************************************************
 *
 *	将数组转换为JSON字符串（兼容中文）
 *	@param	array	$array		要转换的数组
 *	@return string		转换得到的json字符串
 *	@access public
 *
 *************************************************************/
function JSON($array){
    $json = json_encode($array);
    return urlencode($json);
}
?>