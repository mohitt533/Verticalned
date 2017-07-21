<?php
   session_start();
	require 'connection.php';
	function login($username,$password,$type){
		global $dbh;


if($type == "student")
		$stmt  = $dbh->prepare("SELECT registerno,password,name,year FROM student WHERE registerno =?");

  else {
      $stmt  = $dbh->prepare("SELECT registerno,password,name FROM faculty WHERE registerno =?");

    }
		$stmt->execute(array($username));
		$result = $stmt->fetchObject();

		if($stmt->rowCount()==1){
			$row = $result->password;

		if($row == $password){
      $year = null;
      if(!empty(($result->year)))
        $year = $result->year;
      sessionSet($result->name,$result->registerno,$year,$type);
			return true;
		}
  }
		else{

			return false;
		}
		$result = free();

}

function sessionSet($name, $register,$year,$type){
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $name;
  $_SESSION['register'] = $register;
  $_SESSION['year'] = $year;
  $_SESSION['type'] = $type;
}

	function logout(){
		session_destroy();
	}


	 function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
		else{
			return false;
		}
		}


		function escape($string)
	{
		return htmlentities(trim($string) , ENT_QUOTES , 'UTF-8');
	}
