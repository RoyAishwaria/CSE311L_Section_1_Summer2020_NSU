<?php
require_once('database.php');

$query_department="CREATE TABLE Departments (
	Department_id INT(16) NOT NULL, 
	Department_Name VARCHAR(30) NOT NULL,
	Manager_id INT(16),
	Location_id INT(16) NOT NULL)";
	$result=mysqli_query($conn,$query_department);

	if(!$result){
		echo "Table Not Created, Error:".mysqli_error($conn);
	}

	else{
		echo "Departments Table created successfully";
	}

?>