<?php
namespace ziweiyang;


//cache管理工具
class CacheUtil
{
	protected static $cache = [];
	public static $current = '';
	public static function setCurrent($year){
		if(self::$current != $year){
			self::$current = $year;
			self::clear();
		}
	}
	public static function set($key, $value){
		//if(! self::$cache)
		//	self::$cache = [];
		self::$cache[$key] = $value;
		return self::$cache[$key];
	}
	public static function get($key){
		//if(! self::$cache) self::$cache = [];
		return (array_key_exists($key, self::$cache)) ? self::$cache[$key] : null;
	}
	public static function clear(){
		self::$cache = [];
	}
};
