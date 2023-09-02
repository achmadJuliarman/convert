<?php
namespace GexConvert; 
class Convert{
	public static function forUrl($string){
		$result = preg_replace("/&/gm", '%26', $string);
		$result = preg_replace("/\s/gm", '%20', $result);
		return $result;
	}

	public static function stp($string){
		$result = preg_replace("/^/", "<p>", $string);
		$result = preg_replace("/\n/gm", "</p><p>", $result);
		return $result;
	}
}