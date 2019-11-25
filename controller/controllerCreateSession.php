<?php
	
	class controllerCreateSession{

		public function createSession($name){
			session_name($name);
			session_start();
		}
		public function setValue($name,$value){
			$_SESSION[$name]=$value;
		}
		public function destroySession(){
			session_name("login_sesion");
			session_start();
			session_unset ();
			session_destroy();
		}
		public function isLoaded(){
			session_name("login_sesion");
			session_start();
			return isset($_SESSION["usu"]);
		}

	}

?>