<?php

namespace beyong\commons\utils;

class StringUtils {
	//空字符串判断
	public static function isEmpty($str)
	{
        if (empty($str)) {
			return true;
		}

		return false;
	}

	public static function isBlank($str) 
	{
		if (empty($str)) {
			return true;
		}
		if (ctype_space($str)) {
			return true;
		}
		return false;
	}

	/**
	 * 生成随机字符串数,数字和小写字母组合
	 *
	 */
	public static function getRandString($length = 32, $chars='1234567890abcdefghijklmnopqrstuvwxyz') 
	{
		if (strlen($chars) == 0) {
            return "";
		}

		$charsLength = strlen($chars) - 1;
		$myRand = "";
		for ($i=0; $i < $length; $i++) {
			$j = rand(0, $charsLength);
			$myRand .= $chars[$j];
		}
	
		return $myRand;
	}
	
	/**
	 * 生成随机数字
	 *
	 */
	public static function getRandNum($length = 32) {
		$str = '1234567890';
	
		$myRand = "";
		for ($i=0; $i < $length; $i++) {
			$j = rand(0, 9);
			$myRand .= $str[$j];
		}
	
		return $myRand;
	}
}

?>