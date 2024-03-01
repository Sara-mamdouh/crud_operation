<?php
$useName="root";
$password ="";

try{
  $pdo = new PDO("mysql:host=localhost;dbname=hr",$useName,$password);
  $pdo->getAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
  // echo "suss";

}catch(PDOException $e){
  echo "error to connected to db " .$e->getMessage();
}