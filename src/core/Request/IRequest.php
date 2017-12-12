<?php

interface IRequest
{
	function getPost() :RequestData;
	function getGet() :RequestData;
	function getCookie() :RequestData;
}
