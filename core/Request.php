<?php 

class Request
{
	
	public static function uri()
	{
		return ltrim(strstr($_SERVER['REQUEST_URI'], '/'), '/');
	}

	public static function newsId()
	{
		return ltrim(strstr($_SERVER['REQUEST_URI'], 'news/'), 'news/');
	}

	public static function articleId()
	{
		return ltrim(strstr($_SERVER['REQUEST_URI'], 'news/article/'), 'news/article/');
	}
}