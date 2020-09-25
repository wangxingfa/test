<?php
namespace Mytools;
/**
 * @Description json工具类
 * @author louis
 * @email 9354666680@qq.com
 */

class Tools{
	
	 /**
     * Description:  数组转化json
     * @param array $arr 
     * @return string 
     */
	public static function arrayToJson($arr){
		if(is_array($arr)){
		return json_encode($arr);
		}
		return false;
		
	}
	 /**
     * Description:  json字符串转化成数组
     * @param string $json
     * @return array
     */
	
    public static function jsonToArray($json){
		
		return json_decode($json,true);
	}
	
	
	
}