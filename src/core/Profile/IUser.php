<?php

interface IUser
{
	function create(string $table, array $fieldsAndValues) :bool;
	function logout() :bool;
	function login(string $username, string $password) :bool;
	function find($username) :bool;
	function getUserData() :array;
}
