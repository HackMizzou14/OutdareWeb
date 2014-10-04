<?php

  $user= $_POST['user']
    $_POST['password'];

    $user = 'paul';
    

    $db = new SQLite3('outdare.db');
    $queries = "SELECT user, email, phonenumber WHERE username=:user";
  //  $db->exec($queries);


    $statement = $db->prepare($queries);
    $statement->bindValue(':user', $user,SQLITE3_TEXT);
    

    $result = $statement->execute();

    echo $result;

   // var_dump($result->fetchArray());


    


?> 
