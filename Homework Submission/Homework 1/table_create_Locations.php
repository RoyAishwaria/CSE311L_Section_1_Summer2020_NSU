<?php
require_once('database.php');

$query_Locations="CREATE TABLE Locations (
	Location_id INT(4) NOT NULL PRIMARY KEY, 
	Street_Adress VARCHAR(40) NULL,
	Postal_Code VARCHAR(12) NULL,
    City VARCHAR(30) NOT NULL,
    State_Province VARCHAR(25) NULL,
    Country_ID VARCHAR(2) NULL)";
	
	$result=mysqli_query($conn,$query_Locations);

	if(!$result){
		echo "Table Not Created, Error:".mysqli_error($conn);
	}

	else{
		echo "Locations Table created successfully";
	}

?>