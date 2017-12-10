<?php 

class Request
{
	
	public static function uri()
	{
		return ltrim(strstr($_SERVER['REQUEST_URI'], '/'), '/');
	}
}