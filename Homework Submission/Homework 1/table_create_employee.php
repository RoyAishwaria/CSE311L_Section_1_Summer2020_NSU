<?php
require_once('database.php');

$query_employee="CREATE TABLE Employees (
	Employee_id INT(6) NOT NULL PRIMARY KEY, 
	First_Name VARCHAR(20) NULL ,
	Last_Name VARCHAR(25) NOT NULL ,
	Email VARCHAR(25) NOT NULL,
	Phone_Number VARCHAR(15) NULL,
	Hire_Date DATE,
	Job_Id VARCHAR(10) NOT NULL,
	Salary INT(8),
	Commission_pct INT(2) NULL,
    Manager_id INT(6) NULL,
    Department_id INT(4) NULL)";

	$result=mysqli_query($conn,$query_employee);
	if(!$result){
		echo "Table Not Created, Error:".mysqli_error($conn);
	}
	else{
		echo "Employees Table created successfully";
	}

?>