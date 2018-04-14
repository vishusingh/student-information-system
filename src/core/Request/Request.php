<?php
/**
 * Created by Kidhoma Norman.
 * User: arksnorman
 * Date: 12/4/17
 * Time: 8:02 PM
 * Website: https://arksnorman.tk
 */

class Request implements IRequest
{
	private $post;
	private $get;
	private $cookie;

	public function __construct(array $post, array $get, array $cookie)
	{
		$this->post = $post;
		$this->get = $get;
		$this->cookie = $cookie;
	}

	public function getPost() :RequestData
	{
		return new RequestData($this->post);
	}

	public function getGet() :RequestData
	{
		return new RequestData($this->get);
	}

	public function getCookie() :RequestData
	{
		return new RequestData($this->cookie);
	}
}
