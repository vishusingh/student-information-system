<?php

	class Request
	{
		public static $properties;

		public static function get(string $key)
	    {
	        if(isset(self::$properties[$key]))
	        {
	            return self::$properties[$key];
	        }
	        return null;
	    }

	    public function set(string $key, $val)
	    {
	        $this->properties[$key] = $val;
	    }
	}