<?php
namespace GexConvert; 
class Convert{
	public static function forUrl($string){
		$result = preg_replace("/&/", '%26', $string);
		$result = preg_replace("/\s/", '%20', $result);
		return $result;
	}
}