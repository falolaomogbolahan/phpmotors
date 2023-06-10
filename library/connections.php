<?php
/*
*Proxy connection to the phpmotors database 
*/

function phpmotorsConnect()
{
$server = 'localhost';
 $dbname= 'phpmotors';
 $username = 'fclient';
 $password = 'nQE9uUMk-7]h(mb3';
 $dsn = "mysql:host=$server;dbname=$dbname";
 $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
 
 try {
    $link = new PDO($dsn, $username, $password, $options);
    return $link; 
   //if (is_object($link)) {
    //echo 'It Worked!'; }
 } catch (PDOException $e) {
   // echo "It didn't work, error: " . $e->getMessage(); }
   header('Location: /phpmotors/view/500.php');
   exit;
  }
}

phpmotorsConnect (); 
?>