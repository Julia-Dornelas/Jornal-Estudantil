<?php
	require_once('SessionConf.php');
	class Security
	{
		public static function path()
		{
			return "http://$_SERVER[HTTP_HOST]/" . SessionConf::$sessionFolderPath . "/";
		}

		public static function pathlogin()
		{
			return Security::path() . SessionConf::$sessionLogin;
		}
		public static function pathError()
		{
			return Security::path() . SessionConf::$sessionError;
		}
		public static function pathlogout()
		{
			return Security::path() . SessionConf::$sessionLogout;
		}
		public static function pathFolder()
		{
			return SessionConf::$sessionFolderPath;
		}

		public static function exit()
		{
			unset($_SESSION[SessionConf::$sessionObj]);
			echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=" . Security::path() . "'>";
			exit;
		}
	
		public static function verifyAuthentication()
		{
			if (Security::GetDataSession(SessionConf::$sessionObj) == ''){
				
				//echo Security::pathlogin();
				//die();

				header("Location: " . Security::pathlogin());
				
				exit;
			}
		}  
	   
		public static function GetDataSession($var)
		{
			return (isset($_SESSION[$var])) ? $_SESSION[$var] : '';
		}

		public static function SetDataSession($var)
		{
			return (isset($_SESSION[$var])) ? $_SESSION[$var] : '';
		}
	}
?>
