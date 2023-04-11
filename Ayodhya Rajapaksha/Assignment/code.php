<?php
session_start();


require "dbcon.php";

if (isset($_POST['Delete Record']))
{
    $S_No=mysqli_real_escape_string($con,$POST['Delete Record']); 
    $query="DELETE FROM bank_details WHERE S_No='$S_No'";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message']="Deleted Successfully";
        header("Location:index.php");
        exit(0); 
    }
    else
    {
        $_SESSION['message']=" Not Deleted Successfully";
        header("Location:index.php");
        exit(0);

    }
}

if (isset($_POST["Update"]))
{
    $S_No=mysqli_real_escape_string($con,$POST['S_No']);
    $Bank_Name= mysqli_real_escape_string($con,$_POST['Bank_Name']);
    $Branch= mysqli_real_escape_string($con,$_POST['Branch']);
    $Branch_Code= mysqli_real_escape_string($con,$_POST['Branch_Code']);
    $Account_Number= mysqli_real_escape_string($con,$_POST['Account_Number']);

    $query="UPDATE bank_details SET Bank_Name='$Bank_Name',Branch='$Branch',Branch_Code='$Branch_Code',Account_Number='$Account_Number'WHERE S_No='$S_No'";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message']="Updated Successfully";
        header("Location:index.php");
        exit(0); 
    }
    else
    {
        $_SESSION['message']=" Not Updated Successfully";
        header("Location:index.php");
        exit(0);

    }
}

if(isset($_POST["Save"]))
{
    $Bank_Name= mysqli_real_escape_string($con,$_POST['Bank_Name']);
    $Branch= mysqli_real_escape_string($con,$_POST['Branch']);
    $Branch_Code= mysqli_real_escape_string($con,$_POST['Branch_Code']);
    $Account_Number= mysqli_real_escape_string($con,$_POST['Account_Number']);

    $query="INSERT INTO bank_details(Bank_Name,Branch,Branch_Code,Account_Number) VALUES
        ('$Bank_Name','$Branch','$Branch_Code','$Account_Number')";
    
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message']="Created Successfully";
        header("Location: student_create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']=" Not Created Successfully";
        header("Location:student_create.php");
        exit(0); 
    }

}
?>
