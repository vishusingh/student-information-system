<?php

class User implements IUser
{
	private $database;
	private $session;
	private $userData;

	public function __construct(Database $database, Session $session)
	{
		$this->database = $database;
		$this->session = $session;
	}


	public function login(string $username = '', string $password = '') :bool
	{
		if ($this->find($username))
		{
			if (password_verify($password, $this->getUserData()['password']))
			{
				$this->session->set('login', $username);
				$this->session->set('role', $this->getUserData()['role']);
				return true;
			}
			return false;
		}
		return false;
	}

	public function create(string $table, array $fields) :bool
	{
		return $this->database->insert($table, $fields);
	}

	public function isLoggedIn() :bool
	{
		return $this->session->has('login');
	}

	public function find($username) :bool
	{
		if ($this->admin($username))
		{
			$this->userData = $this->database->getWhere('admins', 'WHERE username = ?', [$username]);
			return true;
		}
		if ($this->lecturer($username))
		{
			$this->userData = $this->database->getWhere('lecturers', 'WHERE username = ?', [$username]);
			return true;
		}
		if ($this->student($username))
		{
			$this->userData = $this->database->getWhere('students', 'WHERE username = ?', [$username]);
			return true;
		}
		return false;
	}

	public function getUserData() :array
	{
		return $this->userData;
	}

	private function admin($username) :bool
	{
		return count($this->database->getWhere('admins', 'WHERE username = ?', [$username])) > 0;
	}

	private function lecturer($username) :bool
	{
		return count($this->database->getWhere('lecturers', 'WHERE username = ?', [$username])) > 0;
	}

	private function student($username) :bool
	{
		return count($this->database->getWhere('students', 'WHERE username = ?', [$username])) > 0;
	}

	public function logout() :bool
	{
		return $this->session->destroy();
	}
}
