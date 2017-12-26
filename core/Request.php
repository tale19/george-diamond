<?php 

namespace App\Core;

class Request
{
	
	public static function uri()
	{
		return ltrim(parse_url(strstr($_SERVER['REQUEST_URI'], '/'), PHP_URL_PATH), '/');
	}

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
	}

	public static function newsPageNumber()
	{
		return ltrim(strstr($_SERVER['REQUEST_URI'], 'news/'), 'news/');
	}

	public static function articleId()
	{
		return ltrim(strstr($_SERVER['REQUEST_URI'], 'news/article/'), 'news/article/');
	}
}