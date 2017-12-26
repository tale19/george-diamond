<?php 

namespace App\Models;
use DateTime;
class News
{
	protected $id;
	protected $title;
	protected $date;
	protected $content;
	protected $imgname;
	protected $caption;
	// function __construct($id, $title, $date, $content)
	// {
	// 	$this->id = $id;
	// 	$this->title = $title;
	// 	$this->date = $date;
	// 	$this->content = $content;
	// }

	// *** GETTERS ***
	public function getId()
	{
		return $this->id;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getDate()
	{
		return new DateTime($this->date); // returns DateTime Object right away instead of a string that is then passed to another method to create the DateTime Object. This is also more flexible because we can access this Object from various documents and use it (e.g. just set different format in Serbian index.view.php)
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getImgName()
	{
		return $this->imgname;
	}

	public function getCaption()
	{
		return $this->caption;
	}


	// another way is through magic function __get(), but it won't work for date, because it won't return DatTime Object, but a string in MySQL format. Either way, magic method is convenient because it doesn't require to set a method for each property.
	public function __get($key) {
		return $this->$key;
	}

}