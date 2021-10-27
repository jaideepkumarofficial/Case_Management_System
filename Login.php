<?php  

require 'conn.php';

if(isset($_POST['submit'])){  
   
    if(!empty($_POST['number']) && !empty($_POST['pass'])) {  
        $number=$_POST['number'];  
        $pass=$_POST['pass'];  
        $query=mysqli_query($conn,"SELECT * FROM user WHERE number='".$number."' AND pass='".$pass."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {
            if($number == $number && $pass == $pass)  
            {  
            /*session_start();  
            $_SESSION['sess_user']=$user;  
          */
            
            header('location: Home.html');  
            }  
            else {  
            echo "Invalid username or password!";  
            } 
        } 
          
    }else {  
            echo "All fields are required!";  
             }  
    }  
?>  
        
      
    