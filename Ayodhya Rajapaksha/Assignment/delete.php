<?php
if 
    (isset($_GET["S_No"])){
        $S_No=$_GET["S_N0"];

        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "assignment_1"; 

        $connection=new mysqli($host,$user,$password,$db_name);

        $sql="DELETE FROM bank_details WHERE S_No=$S_No";
        $connection->query($sql);
    }

    header("location:index.php");
    exit;



?>