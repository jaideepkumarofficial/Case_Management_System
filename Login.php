<?php  

require 'conn.php';

if(isset($_POST['submit'])){  
    if(!empty($_POST['number']) && !empty($_POST['dob'])) {  
        $number=$_POST['number'];  
        $dob=$_POST['dob'];  
        $query=mysqli_query($conn,"SELECT * FROM user WHERE number='".$number."' AND dob='".$dob."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {
            if($number == $number && $dob == $dob)  
            {  
            /*session_start();  
            $_SESSION['sess_user']=$user;  
          */
            
            header('location: Home.html');  
            }  
              
        }  
        else {  
            echo "Invalid username or password!";  
            }  
          
        } else {  
            echo "All fields are required!";  
        }  
        }  
?>  
        
      
    