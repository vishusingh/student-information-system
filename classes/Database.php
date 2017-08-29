<?php 

	/**
	* @author Kidhoma Norman
	* Create new class to handle database duties
	*/

	class Database
	{

		private static $instance = null;

		private static $connection;

		private	static $query;

		private	static $error = false;

		private	static $results;
 
		private	static $count = 0;

		private static $dbhost = 'ec2-23-23-225-12.compute-1.amazonaws.com';

		private static $dbname = 'desh8nqneg7dki';

		private static $dbusername = 'tawzgjtdvjvmey';

		private static $dbpassword = '3150362bb41de7ee6215db1e05ea4c52f464f3a69b5c82241c33f9ddf53fb15e';

		private static function connect()
		{

			try 
			{

				self::$connection = new PDO('pgsql:host=' . self::$dbhost . ';dbname=' . self::$dbname . ';port=5432', '' . self::$dbusername . '', '' . self::$dbpassword . '');
				self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} 

			catch (PDOException $e) 
			{

				die($e->getMessage());

			}

			return new static;

		}

		public static function getInstance()
		{

			if (!isset(self::$instance)) 
			{

				self::$instance = self::connect();

			}

			return self::$instance;

		}

		public static function query($sql, $params = array())
		{

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

					self::$results 	= self::$query->fetchAll(PDO::FETCH_OBJ);

					self::$count = self::$query->rowCount();

				}

				else
				{

					self::$error = true;

				}

				return new static;

			}			

		}

		private static function action($action, $table, $where = array())
		{

			if (count($where) === 3)
			{

				$operators = array('=', '>', '<', '>=', '<=');

				$field = $where[0];

				$operator = $where[1];

				$value = $where[2];

				if (in_array($operator, $operators)) 
				{

					$sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";

					if (!self::getInstance()->query($sql, array($value))->error()) 
					{

						return new static;

					}

				}

			}

			return false;
		
		}

		public static function getWhere($table, $where = array())
		{
			
			return self::action('SELECT *', $table, $where)->results();
			
		}

		public static function getAll($table)
		{
			
			return self::getInstance()->query("SELECT * FROM {$table}")->results();
			
		}

		public static function delete($table, $where)
		{

			return self::action('DELETE', $table, $where);

		}

		public static function insert($table, $fields = array())
		{

			if (count($fields)) 
			{
				
				$keys = array_keys($fields);

				$values = '';

				$x = 1;

				foreach ($fields as $field) 
				{
					
					$values .= '?';

					if ($x < count($fields)) 
					{
						
						$values .= ', ';

						$x++; 

					}

				}

				$queryString = "INSERT INTO {$table} (" . implode(', ', $keys) . ") VALUES ({$values})";

				if (!self::getInstance()->query($queryString, $fields)->error()) 
				{
					
					return true;

				}

			}

			return false;

		}

		public function error()
		{

			return self::$error;

		}

		public function count()
		{

			return self::$count;

		}

		public function results()
		{

			return self::$results;

		}

	}
	
?>