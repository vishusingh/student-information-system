<?php

	class Timetables extends Controller
	{
		private $app;
		private $data;

		public function __construct(IApp $app)
		{
			$this->app = $app;
			$this->data = new DashboardModel($this->app);
		}

		/**
		 * @throws \Dwoo\Exception
		 */
		public function index()
		{
			$this->renderTemplate('timetables.tpl', array_merge($this->app->getDefinitions(),
				[
					'timetables' => $this->data->getTimetables(),
					'pageTitle' => 'Timetables download',
					'timetablesCounter' => count($this->data->getTimetables())
				]
			));
		}
	}
