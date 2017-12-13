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
		if (!($this->isLoggedIn() && ($this->role ==  'admin')))
		{
			die('<h2>Unauthorized Access. This attempt will be reported to administrators</h2>');
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
		return ($this->role ==  'admin');
	}

	public function isStudent() :bool
	{
		return ($this->role ==  'student');
	}
}
