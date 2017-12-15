<?php

class Authenticator
{
	private $loggedIn = false;
	private $role;
	private $session;

	public function __construct(Session $session)
	{
		$this->session = $session;
		$this->role = $this->session->get('role');
		$this->loggedIn = $this->session->has('login');
	}

	public function requireAdmin() :void
	{
		$this->requireLoggedIn();
		if (!($this->isLoggedIn() && ($this->role ==  'admin' || $this->role ==  'lecturer')))
		{
			die('<h2 style="text-align: center; color: red">Not Authorized</h2>');
		}
	}

	public function requireLoggedIn() :void
	{
		if (!$this->isLoggedIn())
		{
			Redirect::to();
		}
	}

	public function isLoggedIn() :bool
	{
		return $this->loggedIn;
	}

	public function isAdmin() :bool
	{
		return ($this->role ==  'admin') || ($this->role ==  'lecturer');
	}

	public function isStudent() :bool
	{
		return ($this->role ==  'student');
	}
}
