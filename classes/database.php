<?php 
	/**
	* @author Kidhoma Norman
	* Create new class to handle database duties
	*/
	class Database
	{
		//initialize static and private property which will store DB connection
		private static $connect;

		//construct method to automatically connect to database when class is instantiated
		function __construct()
		{
			//connect to database
			self::$connect = mysqli_connect('127.0.0.1', 'root', 'root', 'test');
			return self::$connect;
		}
	}
?>