<?php  
require 'conn.php';
if(isset($_POST['signup'])){  
    if(!empty($_POST['name']) && !empty($_POST['number']) && !empty($_POST['email'])  && !empty($_POST['pass'])){  
        $name=$_POST['name'];  
        $number=$_POST['number'];
        $email=$_POST['email'];  
        $pass=$_POST['pass'];
        $query=mysqli_query($conn,"SELECT * FROM user WHERE number='".$number."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows==0)  
        {  
        $sql="INSERT INTO user(name,number,email,pass) VALUES('$name','$number','$email','$pass')";  
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
