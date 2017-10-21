<?php 


class News
{
	protected $id;
	protected $title;
	protected $date;
	protected $content;
	// function __construct($id, $title, $date, $content)
	// {
	// 	$this->id = $id;
	// 	$this->title = $title;
	// 	$this->date = $date;
	// 	$this->content = $content;
	// }

	// $date = new DateTime($originalDateFormat);	

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
		return new DateTime($this->date);
	}

		public function getContent()
	{
		return $this->content;
	}
}