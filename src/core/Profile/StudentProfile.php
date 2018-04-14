<?php

class StudentProfile implements IProfile
{
	private $username;
	private $user;
	private $all;
	private $allData;
	private $database;
	private $session;

	public function __construct(IUser $user, Database $database, Session $session)
	{
		$this->session = $session;
		$this->database = $database;
		$this->username = $session->get('login');
		$this->user = $user;
		$this->all = $this->user->find($this->username);
		$this->allData = $this->user->getUserData();
	}

	public function getUsername() :string
	{
		return $this->getAll()->get('username');
	}

	public function getFullName() :string
	{
		if ($this->getAll()->get('middle_name') != null && !empty($this->getAll()->get('middle_name')))
		{
			return (
				$this->getAll()->get('first_name') . ' ' .
				$this->getAll()->get('middle_name') . ' ' .
				$this->getAll()->get('last_name')
			);
		}
		return ($this->getAll()->get('first_name') . ' ' . $this->getAll()->get('last_name'));
	}

	public function getPassword() :string
	{
		return $this->getAll()->get('password');
	}

	public function getEmail() :string
	{
		return $this->getAll()->get('email');
	}

	public function getRole() :string
	{
		return $this->getAll()->get('role');
	}

	public function getDateJoined() :string
	{
		return $this->getAll()->get('joined');
	}

	public function getLastLogin() :string
	{
		return $this->getAll()->get('last_login');
	}

	public function getPhoneNumber() :string
	{
		return $this->getAll()->get('phone_number');
	}

	public function getCourse() :string
	{
		return $this->getAll()->get('course');
	}

	public function getNationality() :string
	{
		return $this->getAll()->get('nationality');
	}

	public function getGender() :string
	{
		return ucfirst(strtolower($this->getAll()->get('gender')));
	}

	public function getAll() :IRequestData
	{
		return new RequestData($this->allData);
	}
}
