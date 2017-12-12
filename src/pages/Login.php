<?php

class Login extends Controller
{
	private $post;
	private $app;
	private $user;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->post = $this->app->getRequest()->getPost();
		$this->user = $this->app->getUser();
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function index()
	{
		$errorList = [];
		$page = new Page('Login | SIS');

		if (Input::exists('POST'))
		{
			$username = $this->post->get('username');
			$password = $this->post->get('password');

			if (empty($username) || empty($password))
			{
				$errorList[] = 'Username or Password must not be empty';
			}
			if (!count($errorList))
			{
				if ($this->user->login($username, $password))
				{
					Redirect::to('/dashboard/');
				}
				else
				{
					$errorList[] = 'Incorrect username or password.';
				}
			}
		}

		$data = [
			'js' => $this->app->getWebPaths()->get('js'),
			'css' => $this->app->getWebPaths()->get('css'),
			'images' => $this->app->getWebPaths()->get('images'),
			'username' => $this->post->get('username'),
			'errors' => $errorList,
			'errorCounter' => count($errorList),
			'pageTitle' => $page->getTitle()
		];

		$this->renderTemplate('login.tpl', $data);
	}
}
