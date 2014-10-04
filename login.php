<?php


  $user= $_POST['user']
    $_POST['password'];

    $user = 'paul';
 
    $db = new SQLite3->('outdare.db');
 
    $(!$db){

	echo $db->lastErrorMsg();
    }
    else{

	echo "OPENED DATABASE BRUH!";
    }
 //  $queries = "SELECT user, email, phonenumber WHERE username=:user";



  //  $statement = $db->prepare($queries);
 //   $statement->bindValue(':user', $user,SQLITE3_TEXT);
    

   // $result = $statement->execute();


    //echo $result;

   // var_dump($result->fetchArray());


    


?> 
