<?php
require_once('database.php');

$query="INSERT INTO locations (Location_id,Street_Adress,Postal_code,City,State_Province,Country_ID)
        VALUES ('1400','2014 Jabberwocky Rd','26192','Southlake','Texas','US'),
        ('1500','2011 Interiors Bivd','99236','South San Francisco','California','US'),
        ('1700','2004 Charade Rd','98199','Seattle','Washington','US'),
        ('1800','460 Bloor St. W.','ON M5S 1X8','Toronto','Ontario','CA'),
        ('2500','Magdalen Centre-The Oxford Sc. Park','OX9 9ZB','OXford','Oxford','UK')";

        $result=mysqli_query($conn,$query);

        if(!$result){
            echo "Values Not Inserted, Error:".mysqli_error($conn);
        }
    
        else{
            echo "Value added successfully";
        }
?>


