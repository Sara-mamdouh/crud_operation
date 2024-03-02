<?php

class EmployeeEntityManager
{
  private PDO $connection;
  public function __construct(private string $driver,private string $host,private string $dbname,private string $userName,private string $password)
  {
    $this->connection = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbname}",$userName,$password);
  }
  public function createNewEmployee($nameF,$nameL,$email,$phone,$hireDate,$jopId,$salary,$managerId,$departmentId){

    $employee = $this->connection->prepare("INSERT INTO employees(first_name,last_name,email,phone_number,hire_date,job_id,salary,manager_id,department_id) VALUES (?,?,?,?,?,?,?,?,?);");
    $employee->execute([$nameF,$nameL,$email,$phone,$hireDate,$jopId,$salary,$managerId,$departmentId]);
    echo "INSERT success";
    

  }
  public function getAllEmployee(){
    $employee = $this->connection->prepare("SELECT * FROM employees");
    $employee->execute();
    $employee = $employee->fetchAll(PDO::FETCH_ASSOC);
    return $employee;
  } 
  public function findEmployeeById(){
    
  } 
  public function updateEmployee(){
    
  } 
  public function deleteEmployee(){
    
  }


}

?>