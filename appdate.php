<?php
     require 'conn.php';
     session_start();             
    $date = $_POST['date'];
    
    echo $date;
    $query=mysqli_query($conn,"SELECT * FROM datecheck WHERE date='".$date."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows > 0)
    {  
        header('location: try.php'); 
        header("Location:appointment.php?date=$date");
    }

    else
    {
        $sql="INSERT INTO datecheck(date,A,B,C,D) VALUES('$date','F','F','F','F')";  
        if(mysqli_query($conn,$sql))
          {
            header('location: Appointment.php');  
        }
    }
                  
                  
?>