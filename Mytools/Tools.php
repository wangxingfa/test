<?php
namespace Mytools;

class Tools{
	
	public static function arrayToJson($arr){
		if(is_array($arr)){
		return json_encode($arr);
		}
		return false;
		
	}
	
    public static function jsonToArray($json){
		
		return json_decode($json,true);
	}
	
	
	
}