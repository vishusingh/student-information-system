<?php

class Redirect
{
	public static function to(string $location = '/') :void
	{
		header("location: $location");
		exit();
	}
}
