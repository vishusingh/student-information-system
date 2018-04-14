<?php

interface IRequestData
{
	function get($key) :?string;
	function getAll() :array;
	function getSanitized($key) :?string;
	function count() :int;
	function has($key) :bool;
	function isEmpty() :bool;
	function set($key, $value) :void;
	function unset($key) :void;
}
