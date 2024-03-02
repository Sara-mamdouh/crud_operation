<?php
include_once "./databaseManager.php";
$driver="mysql";
$useName="root";
$password ="";
$dbName="hr";
$host="localhost";
$employeeTableManager =new EmployeeEntityManager($driver,$host,$dbName,$useName,$password);
// $employeeTableManager->createNewEmployee('sara','mamdouh','neena.kochhar@sqltutorial.org','515.123.4568','1989-09-21',5,17000.00,100,9);
/////////////////////////
// $emps =$employeeTableManager->getAllEmployee();
// foreach($emps  as $emp){
//   echo $emp["first_name"] . "</br>";
// }
//////////////////////
// $emp =$employeeTableManager->findEmployeeById(101);

// var_dump($emp);
////////////////////
// $emp =$employeeTableManager->deleteEmployee(101);

// var_dump($emp);

/////////////////////////

$employeeTableManager->updateEmployee("dody","Ebram",103);


// try{
//   $pdo = new PDO("mysql:host=localhost;dbname=hr",$useName,$password);
//   $pdo->getAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
//   // echo "suss";

// }catch(PDOException $e){
//   echo "error to connected to db " .$e->getMessage();
// }