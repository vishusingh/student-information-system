<?php

interface IProfile
{
	function getUsername() :string;
	function getFullName() :string;
	function getPassword() :string;
	function getEmail() :string;
	function getRole() :string;
	function getDateJoined() :string;
	function getLastLogin() :string;
	function getAll() :IRequestData;
	function getPhoneNumber() :string;
}
