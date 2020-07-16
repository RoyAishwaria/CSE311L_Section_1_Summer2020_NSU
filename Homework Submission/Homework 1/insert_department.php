<?php
require_once('database.php');

$query="INSERT INTO departments (Department_id,Department_Name,Manager_id,Location_id)
        VALUES ('10','Administration','200','1700'),
        ('20','Marketing','201','1800'),
        ('50','Shipping','124','1500'),
        ('60','IT','103','1400'),
        ('80','Sales','149','2500'),
        ('90','Executive','100','1700'),
        ('110','Accounting','205','1700'),
        ('190','Contracting','','1700')";

        $result=mysqli_query($conn,$query);

        if(!$result){
            echo "Values Not Inserted, Error:".mysqli_error($conn);
        }
    
        else{
            echo "Value added successfully";
        }
?>