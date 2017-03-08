<?php 
	/**
	* @author Kidhoma Norman
	* Create new class to handle database duties
	*/
	class Database
	{
		private static $_instance = null;
		private $_pdo,
				$_query,
				$_error = false,
				$_results,
				$_count = 0;

		private function __construct()
		{
			try 
			{
				$this->_pdo = new PDO('mysql:host=127.0.0.1;dbname=arksnorman', 'root', 'root');
			} 

			catch (PDOException $e) 
			{
				die($e->getMessage());
			}
		}

		public static function getInstance()
		{
			if (!isset(self::$_instance)) 
			{
				self::$_instance = new Database;
			}

			return self::$_instance;
		}

		public function query($sql, $params = array())
		{
			$this->_error = false;

			if ($this->_query = $this->_pdo->prepare($sql)) 
			{
				$x = 1;
				if (count($params)) 
				{
					foreach ($params as $param) 
					{
						$this->_query->bindValue($x, $param);
						$x++; 
					}	
				}

				if ($this->_query->execute()) 
				{
					$this->_results 	= $this->_query->fetchAll(PDO::FETCH_OBJ);
					$this->_count 		= $this->_query->rowCount();
					echo $this->_count;
				}

				else
				{
					$this->_error = true;
				}
			}

			return $this;		
		}

		public function error()
		{
			return $this->_error;
		}

		public function count()
		{
			return $this->_count;
		}

		public function results()
		{
			return $this->_results;
		}
	}
?>