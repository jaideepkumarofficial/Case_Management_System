<?php  
require 'conn.php';
if(isset($_POST['submit'])){  
    if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email'])  && !empty($_POST['case_type']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['details'])){  
        $name=$_POST['name'];  
        $phone=$_POST['phone']; 
        $email=$_POST['email']; 
        $case_type=$_POST['case_type'];   
        $date=$_POST['date'];
        $time=$_POST['time'];
        $details=$_POST['details'];  
        $sql="INSERT INTO appointment(name,phone,email,case_type,date,time,details) VALUES('$name','$phone','$email','$case_type','$date','$time','$details')";  
            if(mysqli_query($conn,$sql))
            {
                header('location: new.html');  
            } else {  
            echo "Failure!";  
            }   
      
        } else {  
        echo "That username already exists! Please try again with another.";  
        }  
    }
     else {  
        echo "All fields are required!";  
    }  
    ?>  