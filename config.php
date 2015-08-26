<?php
	//DATABASE STUFF
	define("DB_HOST",	"localhost");
	define("DB_USER",	"root");
	define("DB_PWD",	"123456");
	define("DB_DB",		"shrtnr");
	
	//WHAT CHARS SHOULD BE AVAILABLE FOR CREATING THE URLS?
	define("SYMBOLS", "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
	
	//HOW MANY CHARS SHOULD THE LINK OUTPUT BE IF NOT A CUSTOM URL?
	define ("URL_PADDING", 6);
	
	//WHERE IN YOUR SERVER WILL SHRTNR BE INSTALLED?
	//JUST THE PATH AFTER YOUR DOMAIN
	//IF IT WILL RESIDE IN "http://yourdomain.com/shrtnr/" then write "/shrtnr/"
	//IF IT WILL RESIDE IN "http://yourdomain.com/" then write "/"
	define("HTTPD_FILES_PATH",	"/active/shrtnr/");
	
	//SHOULD THE SCRIPT USE "POST" FOR API CALLS (true) OR "GET" (false) IS FINE?
	define("USE_POST", false);
	
	//SHOULD PEOPLE BE ABLE TO REMOVE LINKS?
	define("CAN_DELETE", true);
	
	//ALL AUTOMATICALLY CREATED LINKS BEGIN WITH THIS CHAR (USE A SPECIAL CHAR THAT DOES NOT APPEAR ON THE SYMBOLS DEFINED ABOVE)
	define("LINK_PADDING", "_");
	
	//WHEN PEOPLE TRY TO ACCESS AN UNEXISTING LINK, WHERE SHOULD THEY BE REDIRECTO TO?
	define("ERROR_PAGE", "http://localhost/");