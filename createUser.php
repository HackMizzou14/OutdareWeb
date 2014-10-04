<?php

$db = new SQLite3('outdare.db');

$user = $_GET['user'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$password =$_GET['password'];


//$statement = $db->prepare('SELECT id,username, email, phonenumber FROM users WHERE username = :user;');


$insert = 'INSERT INTO users (username,password,email,phonenumber) VALUES (:user,:password,:email,:phone)';

//$insert = 'INSERT INTO users(id,username,password,email,phonenumber) VALUES (NULL,?,?,?,?)';	




$statement = $db->prepare($insert);

$statement->bindValue(':user',$user);
$statement->bindValue(':password',$password);
$statement->bindValue(':email',$email);
$statement->bindValue(':phone',$phone);

//$what = $statement->execute($user,$password,$email,$phone);
$what = $statement->execute();
var_dump($what);
	
?> 
