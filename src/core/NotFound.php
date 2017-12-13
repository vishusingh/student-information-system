<?php

class NotFound extends Controller
{

	/**
	 * @throws \Dwoo\Exception
	 */
	public function index()
	{
		$this->renderTemplate('404.tpl',
			[
				'js' => $this->getApp()->getWebPaths()->get('js'),
				'css' => $this->getApp()->getWebPaths()->get('css'),
				'pageTitle' => '404 | Not Found'
			]
		);
	}
}
