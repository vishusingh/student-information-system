<?php

class Notices extends Controller
{
	private $app;
	private $database;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->database = $this->app->getDatabase();
	}

	/**
	 * @param string $param
	 * @throws \Dwoo\Exception
	 */
	public function index($param = '')
	{
		$deleted = ($param == 'deleted') ? true : false;
		$this->app->getAuthenticator()->isLoggedIn();
		$this->renderTemplate('notices.tpl', array_merge($this->app->getDefinitions(),
			[
				'pageTitle' => 'All notices',
				'delete' => $deleted
			]
		));
	}

	/**
	 * @param string $param
	 * @throws \Dwoo\Exception
	 */
	public function new($param = '')
	{
		$this->app->getAuthenticator()->requireAdmin();
		$errorList = [];
		$success = $param == 'success' ? true : false;

		if (Input::exists('POST'))
		{
			$title = Input::get('title');
			$message = Input::get('message');

			if (empty($title) || empty($message))
			{
				$errorList[] = 'All fields are required';
			}
			if (!count($errorList))
			{
				$data = [
					'title' => $title,
					'message' => $message,
					'creator' => $this->app->getProfile()->getUsername(),
					'date_added' => date('Y-m-d h:i:sa')
				];

				if ($this->database->insert('notices', $data))
				{
					Redirect::to('/notices/new/success/');
				}
				else
				{
					$errorList[] = 'Internal server error. Please try again later';
				}
			}
		}
		$this->renderTemplate('new_notice.tpl', array_merge($this->app->getDefinitions(),
			[
				'message' => $this->app->getRequest()->getPost()->get('message'),
				'title' => $this->app->getRequest()->getPost()->get('title'),
				'pageTitle' => 'Post new notice',
				'errorCounter' => count($errorList),
				'errors' => $errorList,
				'success' => $success
			]
		));
	}

	/**
	 * @param string $id
	 * @throws \Dwoo\Exception
	 */
	public function view($id = '')
	{
		$this->app->getAuthenticator()->isLoggedIn();
		$noticeId = (int)$id;
		if (is_int($noticeId))
		{
			$results = $this->getNoticeId($noticeId);
			if (count($results))
			{
				$this->renderTemplate('view_notice.tpl', array_merge($this->app->getDefinitions(),
					[
						'pageTitle' => $results['title'],
						'message' => $results['message'],
						'id' => $results['id'],
						'title' => $results['title']
					]
				));
			}
			Redirect::to('/notices/');
		}
		Redirect::to('/notices/');
	}

	/**
	 * @param string $id
	 * @param string $param
	 * @throws \Dwoo\Exception
	 */
	public function update($id = '', $param = '')
	{
		$this->app->getAuthenticator()->requireAdmin();
		$errorList = [];
		$success = $param == 'success' ? true : false;

		$noticeId = (int)$id;
		if (is_int($noticeId))
		{
			$results = $this->getNoticeId($noticeId);
			if (count($results))
			{
				$message = $results['message'];
				$title = $results['title'];

				if (Input::exists('POST'))
				{
					$title = Input::get('title');
					$message = Input::get('message');

					if (empty($title) || empty($message))
					{
						$errorList[] = 'All fields are required';
					}
					if (!count($errorList))
					{
						$data = [
							'title' => $title,
							'message' => $message,
							'creator' => $this->app->getProfile()->getUsername(),
							'date_updated' => date('Y-m-d h:i:sa')
						];

						if ($this->database->update('notices', $data, "WHERE id = $noticeId"))
						{
							Redirect::to("/notices/update/$noticeId/success/");
						}
						else
						{
							$errorList[] = 'Internal server error. Please try again later';
						}
					}
				}

				$this->renderTemplate('update_notice.tpl', array_merge($this->app->getDefinitions(),
					[
						'message' => $message,
						'title' => $title,
						'pageTitle' => 'Update notice ',
						'errorCounter' => count($errorList),
						'errors' => $errorList,
						'success' => $success,
						'id' => $noticeId
					]
				));
			}
			Redirect::to('/notices/');
		}
		Redirect::to('/notices/');
	}

	public function delete($id = '')
	{
		$this->app->getAuthenticator()->requireAdmin();
		$noticeId = (int)$id;
		if (is_int($noticeId) && count($this->getNoticeId($noticeId)))
		{
			if ($this->database->delete('notices', 'WHERE id = ?', [$noticeId]))
			{
				Redirect::to('/notices/index/deleted/');
			}
			Redirect::to('/notices/');
		}
		Redirect::to('/notices/');
	}

	private function getNoticeId($id) :array
	{
		return $this->app->getDatabase()->fetchRow('SELECT * FROM notices WHERE id = ?', [$id]);
	}
}
