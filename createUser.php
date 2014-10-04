<?php

  //$queries = 'SELECT username, email, phonenumber FROM users WHERE username = :user;';



 
$db = new SQLite3 ('outdare.db');

 $queries = 'SELECT * FROM users';

	$user = $_POST['user'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password =$_POST['password'];


	$statement = $db->prepare('SELECT id,username, email, phonenumber FROM users WHERE username = :user;');


//	$insert = ('INSERT INTO users(id,username,password,email,phonenumber) VALUES (NULL,:user,:password,:email,:phone)');	

	$insert = ('INSERT INTO users(id,username,password,email,phonenumber) VALUES (NULL,?,?,?,?)');	




	$statement = $db->prepare($insert);
/*
	$statement->bindValue(':user',$user);
	$statement->bindValue(':password',$password);
	$statement->bindValue(':email',$email);
	$statement->bindValue(':phone',$phone);
*/

	$statement->execute($name,$passowrd,$email,$phone);





	
	



?> 
