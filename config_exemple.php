<?php
	if($_SERVER['HTTP_HOST'] == '127.8.8.8') {
		$host = '127.0.0.1';
		$user = 'root';
		$pass = '';
		$bd = 'goalie';	
	}else{
		$host = '';
		$user = '';
		$pass = '';
		$bd = '';	
	}

 	try{
	    $db = new PDO('mysql:host='.$host.';dbname='.$bd.'', $user, $pass);
	        $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
	        $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
	   }
	        catch (Exception $e){
	        echo 'Impossible de se connecter  à la BDD !';
	        die();

      		}	
?>