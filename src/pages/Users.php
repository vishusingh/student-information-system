<?php

class Users extends Controller
{
	private $app;
	private $database;
	private $session;
	private $data;
	private $user;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->data = new DataModel($this->app);
		$this->database = $this->app->getDatabase();
		$this->session = $this->app->getSession();
		$this->user = $this->app->getUser();
	}

	/**
	 * @param string $username
	 * @throws \Dwoo\Exception
	 */
	public function view($username = '')
	{
		$this->app->getAuthenticator()->isLoggedIn();
		if ($this->user->find($username))
		{
			$user = new RequestData($this->user->getUserData());
			if ($user->get('role') == 'student')
			{
				$table = 'students';
			}
			elseif ($user->get('role') == 'lecturer')
			{
				$table = 'lecturers';
			}
			else
			{
				$table = 'admins';
			}
			$this->renderTemplate('view_profile.tpl', array_merge($this->app->getDefinitions(),
				[
					'pageTitle' => $user->get('username'),
					'name' => $user->get('username'),
					'email' => $user->get('email'),
					'course' => $user->get('course'),
					'gender' => $user->get('gender'),
					'nationality' => $user->get('nationality'),
					'phoneNumber' => $user->get('phone_number'),
					'fname' => $user->get('first_name'),
					'lname' => $user->get('last_name'),
					'mname' => $user->get('middle_name'),
					'tableName' => $table,
					'userId' => $user->get('id'),
					'passSuccess' => $this->session->has('passwordSuccess'),
					'passSuccessMessage' => $this->session->flash('passwordSuccess'),
					'passErrorMessage' => $this->session->flash('passError'),
					'updateSuccess' => $this->session->has('updateSuccessMessage'),
					'updateSuccessMessage' => $this->session->flash('updateSuccessMessage'),
					'passError' => $this->session->has('passError'),
					'updateError' => $this->session->has('updateError'),
					'updateErrorMessage' => $this->session->flash('updateError'),
					'passwordSuccessMessage' => $this->session->flash('passwordSuccessMessage'),
					'passwordSuccess' => $this->session->has('passwordSuccessMessage')
				]
			));
		}
		else
		{
			Redirect::to();
		}
	}

	public function update()
	{
		$this->app->getAuthenticator()->isLoggedIn();
		$errorList = [];

		if (Input::exists('POST'))
		{
			$table = Input::get('table');
			$email = Input::get('email');
			$username = Input::get('username');
			$id = (int) Input::get('id');
			if (empty($email))
			{
				$this->session->set('updateError', 'Please enter your email');
				$errorList[] = 'Please enter your username or email';
			}
			if (count($errorList) === 0)
			{
				if ($this->database->update($table, ['email' => $email], "WHERE id = $id"))
				{
					$this->session->set('updateSuccessMessage', 'Profile updated successfully');
					Redirect::to("/users/view/$username");
				}
				else
				{
					$this->session->set('updateError', 'Internal server error');
					$errorList[] = 'Internal server error';
				}
			}
			if (count($errorList) > 0)
			{
				Redirect::to("/users/view/$username");
			}
		}
	}

	public function password()
	{
		$errorList = [];

		if (Input::exists('POST'))
		{
			$table = Input::get('table');
			$username  = Input::get('username');
			$oldPass = Input::get('oldPassword');
			$newPass = Input::get('newPassword');
			$newPassRepeat = Input::get('newPasswordRepeat');
			$id = (int) Input::get('id');

			if ($this->app->getAuthenticator()->isAdmin())
			{
				$pass = password_hash($newPass, PASSWORD_DEFAULT);
				if ($this->database->update($table, ['password' => $pass], "WHERE id = $id"))
				{
					$this->session->set('passwordSuccessMessage', 'Password updated successfully');
					Redirect::to("/users/view/$username");
				}
				else
				{
					$this->session->set('passError', 'Internal server error');
				}
			}
			else
			{
				if ($newPassRepeat != $newPass)
				{
					$this->session->set('passError', 'Passwords do not match');
					$errorList[] = 'Passwords do not match';
				}
				if ($this->user->find($username))
				{
					if (!password_verify($oldPass, $this->user->getUserData()['password']))
					{
						$this->session->set('passError', 'Wrong old password');
						$errorList[] = 'Wrong password';
					}
				}
				if (count($errorList) === 0)
				{
					$pass = password_hash($newPass, PASSWORD_DEFAULT);
					if ($this->database->update($table, ['password' => $pass], "WHERE id = $id"))
					{
						$this->session->set('passwordSuccessMessage', 'Password updated successfully');
						Redirect::to("/users/view/$username");
					}
					else
					{
						$this->session->set('passError', 'Internal server error');
						$errorList[] = 'Internal server error';
					}
				}
				if (count($errorList))
				{
					Redirect::to("/users/view/$username");
				}
			}
		}
	}
}
