<?php  
require 'conn.php';
if(isset($_POST['submit'])){  
    if(!empty($_POST['name']) && !empty($_POST['number']) && !empty($_POST['email']) && !empty($_POST['dob'])){  
        $name=$_POST['name'];  
        $number=$_POST['number'];
        $email=$_POST['email'];  
        $dob=$_POST['dob'];  
        $query=mysqli_query($conn,"SELECT * FROM user WHERE email='".$email."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows==0)  
        {  
        $sql="INSERT INTO user(name,number,email,dob) VALUES('$name','$number','$email','$dob')";  
        if(mysqli_query($conn,$sql))
          {
       
            header('location: Login.html');  
        } else {  
        echo "Failure!";  
        }  
      
        } else {  
        echo "That username already exists! Please try again with another.";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    }  
    ?>  
