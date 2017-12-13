<?php

class Dashboard extends Controller
{
	private $app;
	private $data;
	private $lecturers;
	private $admins;
	private $students;
	private $online;
	private $notices;
	private $profile;
	private $authenticator;
	private $complaints;

	public function __construct(IApp $app)
	{
		$this->app = $app;
		$this->data = new DashboardModel($this->app);
		$this->authenticator = $this->app->getAuthenticator();
		$this->online = $this->data->getOnline();
		$this->admins = $this->data->getAdmins();
		$this->lecturers = $this->data->getLecturers();
		$this->students = $this->data->getStudents();
		$this->notices = $this->data->getNotices();
		$this->profile = $this->data->getProfile();
		$this->complaints = $this->data->getComplaints();
	}

	/**
	 * @throws \Dwoo\Exception
	 */
	public function index()
	{
		$this->authenticator->requireLoggedIn();
		$page = new Page('Dashboard');
		$this->renderTemplate('dashboard.tpl', array_merge($this->app->getDefinitions(),
			[
				'pageTitle' => $page->getTitle(),
				'numberOfStudents' => count($this->students),
				'numberOfAdmins' => count($this->admins),
				'numberOfLecturers' => count($this->lecturers),
				'online' => $this->online,
				'complaints' => $this->complaints,
				'notices' => $this->notices,
				'complaintsCounter' => count($this->complaints),
				'noticesCounter' => count($this->notices)
			]
		));
	}
}
