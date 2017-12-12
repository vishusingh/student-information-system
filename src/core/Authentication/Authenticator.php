<?php

class Authenticator
{
	private $loggedIn = false;
	private $role;
	private $profile;
	private $session;

	public function __construct(IProfile $profile, Session $session)
	{
		$this->profile = $profile;
		$this->session = $session;
		$this->role = $this->session->get('role');
		$this->loggedIn = $this->session->has('login');
	}

	public function requireAdmin() :void
	{
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
}
