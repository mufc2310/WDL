<?php
	$link=null;

	function connectDB(){
		$db_host="localhost";
		$db_user ="root";
		$db_password = "root";
		$db_name = "AIKTC";

		global $link;
		$link = mysqli_connect($db_host,$db_user,$db_password) or die(mysqli_error());

		mysqli_select_db($link,$db_name) or die(mysqli_error());
	}

	function queryMysql($query){
		connectDB();
		gloabal $link;
		$result = mysqli_query($link,$query);
		if (!$result){
			echo '<div class="alert alert-danger">Failed to execute query <br>Mysql Error:'.mysqli_error($link).'</div>';
		}
	}


	function fix_name($name){
		$name = trim($name);
		$name = ucfirst($name);
		$name = addslashes($name);
		return $name;
	}
	function fix_email($email){
		$email = trim($email);
		$email = strtolower($email);
		$email = addslashes($email);
		return $email;
	}
	function fix_addr($addr){
		$addr = trim($addr);
		$addr = strtoupper($addr);
		$addr = addslashes($addr);
		return $addr;
	}
	function fix_rollno($rollno){
		$rollno = trim($rollno);
		$rollno = strtolower($rollno);
		$rollno = addslashes($rollno);
		return $rollno;
	}
?>