<?php


  $user= $_POST['user'];
    $_POST['password'];

    $user = 'PAUL';
   echo $user;
   $db = new SQLite3('outdare.db');
 
  if(!$db){

	echo $db->lastErrorMsg();
    }
    else{

	echo "OPENED DATABASE BRUH!";
   }
  //$queries = 'SELECT username, email, phonenumber FROM users WHERE username = :user;';

  $queries = 'SELECT * FROM users';


	$statement = $db->query($queries);
//    $statement->bindValue(':user',$user);

//	$result = $statement->execute();

	while($row = $results->fetchArray()){

		var_dump($row);
	}





//	echo $result;



	//$row;

//	while($row = $statement->fetchArray()){

//	var_dump($row);
//	}

 //   $statement = $db->prepare($queries);
/*	echo $statement;   
 $statement->bindValue(':user', $user,SQLITE3_TEXT);
 echo $statement;  

    $result = $statement->execute();


   echo $result;

   // var_dump($result->fetchArray());

*/
    


?> 
