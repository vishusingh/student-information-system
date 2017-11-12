<?php

class Controller
{
	public function view(string $template) :string
	{
		$file = VIEWPATH . "$template.php";
		if(file_exists($file))
		{
			return $file;
		}
		throw new Exception("Error acquiring view $template", 1);
	}

	public function model(string $model)
	{
		$file = MODELPATH . "$model.php";
		if(file_exists($file))
		{
			return new $model;
		}
		throw new Exception("Error acquiring model $model", 1);
	}
}
