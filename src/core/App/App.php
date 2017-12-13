<?php

class App implements IApp
{
	private $request;
	private $configuration;
	private $database;
	private $rootPath;
	private $webPaths;

	public function __construct(
		IRequest $request,
		Configuration $configuration,
		Database $database,
		string $rootPath,
		array $webPaths
	)
	{
		$this->request = $request;
		$this->configuration = $configuration;
		$this->database = $database;
		$this->rootPath = $rootPath;
		$this->webPaths = $webPaths;
	}

	public function getRequest() :IRequest
	{
		return $this->request;
	}

	public function getConfiguration() :Configuration
	{
		return $this->configuration;
	}

	public function getSession() :Session
	{
		return new Session;
	}

	public function getDatabase() :Database
	{
		return $this->database;
	}

	public function getServer() :Server
	{
		return new Server;
	}

	public function getRootPath() :string
	{
		return $this->rootPath;
	}

	public function getSourcePath() :string
	{
		return $this->getRootPath() . 'src' . DIRECTORY_SEPARATOR;
	}

	public function getTemplatesPath() :string
	{
		 return $this->getSourcePath() . 'templates' . DIRECTORY_SEPARATOR;
	}

	public function getIncludesPath() :string
	{
		return self::getSourcePath() . 'includes' . DIRECTORY_SEPARATOR;
	}

	public function getControllerPath() :string
	{
		return self::getSourcePath() . 'pages' . DIRECTORY_SEPARATOR;
	}

	public function getWebPaths() :RequestData
	{
		return new RequestData($this->webPaths);
	}

	public function getStudentProfile() :StudentProfile
	{
		return new StudentProfile($this->getUser(), $this->getDatabase(), $this->getSession());
	}

	public function getProfile() :Profile
	{
		return new Profile($this->getUser(), $this->getSession());
	}

	public function getUser() :IUser
	{
		return new User($this->getDatabase(), $this->getSession());
	}

	public function getAuthenticator() :Authenticator
	{
		return new Authenticator($this->getSession());
	}

	public function getDefinitions() :array
	{
		$definitions = [
			'footNote' => date('Y') . ' © Student Information System.',
			'brandName' => 'SIS',
			'js' => $this->getWebPaths()->get('js'),
			'css' => $this->getWebPaths()->get('css'),
			'images' => $this->getWebPaths()->get('images'),
			'username' => $this->getProfile()->getUsername(),
			'admin' => $this->getAuthenticator()->isAdmin(),
			'student' => $this->getAuthenticator()->isStudent()
		];
		return $definitions;
	}
}
