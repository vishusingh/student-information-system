<?php

class Controller
{

	/**
	 * @param string $template
	 * @param array $data
	 * @return string|void
	 * @throws \Dwoo\Exception
	 */
	protected function renderTemplate(string $template, array $data = [])
	{
		$templateLoader = new Dwoo\Core();
		$templateLoader->setTemplateDir($this->getApp()->getTemplatesPath());
		echo $templateLoader->get($template, $data);
	}

	protected function getApp() :IApp
	{
		return AppInitializer::getApp();
	}
}
