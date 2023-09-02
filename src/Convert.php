<?php
namespace GexConvert; 
class Convert{
	public static function forUrl($string){
		$result = preg_replace("/&/", '%26', $string);
		$result = preg_replace("/\s/", '%20', $result);
		return $result;
	}

	public static function stp($string){
		$result = preg_replace("/^/", "<p>", $string);
		$result = preg_replace("/\n/", "</p><p>", $result);
		$result = preg_replace("/\z/", "</p>", $result);
		return $result;
	}
}