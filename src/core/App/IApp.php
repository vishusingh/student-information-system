<?php

interface IApp
{
	function getRequest() :IRequest;
	function getSession() :Session;
	function getConfiguration() :Configuration;
	function getDatabase() :Database;
	function getServer() :Server;
	function getRootPath() :string;
	function getTemplatesPath() :string;
	function getIncludesPath() :string;
	function getSourcePath() :string;
	function getControllerPath() :string;
	function getWebPaths() :RequestData;
	function getDefinitions() :array;
	function getStudentProfile() :StudentProfile;
	function getProfile() :Profile;
	function getUser() :IUser;
	function getAuthenticator() :Authenticator;
}
