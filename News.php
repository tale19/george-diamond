<?php 


class News
{
	public $id;
	public $title;
	public $date;
	public $content;
	// function __construct($id, $title, $date, $content)
	// {
	// 	$this->id = $id;
	// 	$this->title = $title;
	// 	$this->date = $date;
	// 	$this->content = $content;
	// }

	// $date = new DateTime($originalDateFormat);	
	public function formatDate()
	{
		$asdf = new DateTime($this->date);
		return $asdf->format('jS M Y');
	}
}