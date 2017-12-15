<?php

class Page
{
	private $title;
	private $author;
	private $description;
	private $keywords;

	public function __construct($title = '', $author = '', $description = '', $keywords = '')
	{
		$this->title = $title;
		$this->author = $author;
		$this->description = $description;
		$this->keywords = $keywords;
	}

	public function getTitle() :string
	{
		return $this->title;
	}

	public function getAuthor() :string
	{
		return $this->author;
	}

	public function getDescription() :string
	{
		return $this->description;
	}

	public function getKeywords() :string
	{
		return $this->keywords;
	}
}
