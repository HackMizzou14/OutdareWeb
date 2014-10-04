<?php

  //$queries = 'SELECT username, email, phonenumber FROM users WHERE username = :user;';



 
$db = new SQLite3 ('outdare.db');

 $queries = 'SELECT * FROM users';

	$user = $_POST['user'];
	$password =$_POST['password'];


	$statement = $db->prepare('SELECT id,username, email, phonenumber FROM users WHERE username = :user;');


	$statement->bindValue(':user' , $user);


//	$results = $db->query($queries);
	
	$results = $statement->execute();


//	$results->setFetchMode(PDO::FETCH_ASSOC);



	$row = $results->fetchArray(SQLITE3_ASSOC);


//	print_r($row);

	
	
	echo json_encode($row);


?> 
