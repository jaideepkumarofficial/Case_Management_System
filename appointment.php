<?php  
require 'conn.php';
if(isset($_POST['submit'])){  
    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['case_type']) && !empty($_POST['details'])){  
        $fname=$_POST['fname'];  
        $lname=$_POST['lname']; 
        $phone=$_POST['phone']; 
        $email=$_POST['email'];
        $case_type=$_POST['case_type'];   
        $details=$_POST['details'];  
        $sql="INSERT INTO appointment(fname,lname,phone,email,case_type,details) VALUES('$fname','$lname','$phone','$email','$case_type','$details')";  
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