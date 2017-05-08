<?php 

	/**
	* @author Kidhoma Norman
	* Create new class to handle database duties
	*/

	class Database
	{

		// property to handle database connection
		private static $instance = null;

		/*
		* property to handle database connection string 
		* new PDO('mysql:host=127.0.0.1;dbname=arksnorman', 'root', 'root');
		*
		*/
		private static $connection;

		// property to handle user querys i.e "SELECT, UPDATE, INSERT etc"
		private	static $query;

		// property to handle errors in case of any
		private	static $error = false;

		// property to handle data which has been got from database
		private	static $results;

		// property to handle number of rows affected 
		private	static $count = 0;

		// property containing database host
		private static $dbhost = '95.211.187.137';

		// property containing database name
		private static $dbname = 'testing1236';

		// property containing database username
		private static $dbusername = 'schoolsystem1';

		// property containing database password
		private static $dbpassword = 'schoolsystem';

		// Method to auto-connect to database at the call of this class
		private function __construct()
		{

			try 
			{

				//connect to database
				self::$connection = new PDO('mysql:host=' . self::$dbhost . ';dbname=' . self::$dbname . '', '' . self::$dbusername . '', '' . self::$dbpassword . '');

			} 

			catch (PDOException $e) 
			{

				// return error if fail to connect to database
				die($e->getMessage());

			}

		}

		// Method to return succesfull connection to database in case of no error
		public static function getInstance()
		{

			if (!isset(self::$instance)) 
			{

				// assign static variable $_instance to database class to construct new database
				self::$instance = new self;

			}

			// Return if sucessful connection
			return self::$instance;

		}

		// Method to hand queries from users i.e "SELECT, INSERT, UPDATE, etc"
		public function query($sql, $params = array())
		{

			// initialize error to false to avoid returning errors of previous queries
			self::$error = false;

			if (self::$query = self::$connection->prepare($sql)) 
			{

				$x = 1;

				if (count($params)) 
				{

					foreach ($params as $param) 
					{

						self::$query->bindValue($x, $param);

						$x++; 

					}

				}

				if (self::$query->execute()) 
				{

					// store results from select statement as an object
					self::$results 	= self::$query->fetchAll(PDO::FETCH_OBJ);

					// store number of rows affected
					self::$count = self::$query->rowCount();

				}

				else
				{

					// return error if above code failed to execute
					self::$error = true;

				}

			}

			return $this;

		}

		private function action($action, $table, $where = array())
		{

			if (count($where) === 3)
			{

				$operators = array('=', '>', '<', '>=', '<=');

				$field = $where[0];

				$operator = $where[1];

				$value = $where[2];

				if (in_array($operator, $operators)) 
				{

					$sql = "{$action} FROM {$table} WHERE {$filed} {$operator} ?";

					if (!$this->query($sql, array($value))->error()) 
					{

						return $this;

					}

				}

			}

			return false;
		
		}

		// get specified data from table
		public function get($table, $where = array())
		{
			
			return $this->action('SELECT *', $table, $where);
			
		}

		// Delete specified data from table
		public function delete($table, $where)
		{

			return $this->action('DELETE', $table, $where);

		}

		// Method to handle errors 
		public function error()
		{

			return self::$error;

		}

		// Method to handle numbers of rows affected 
		public function count()
		{

			return self::$count;

		}

		// Method to handle results fetched from database if any
		public function results()
		{

			return self::$results;

		}

	}
	
?>