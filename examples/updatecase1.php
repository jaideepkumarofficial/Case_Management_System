<?php  
require 'conn.php';
if(isset($_POST['add1'])){  
    if(!empty($_POST['cnr_no']) && !empty($_POST['jname'])  && !empty($_POST['b_on_date'])  && !empty($_POST['h_date'])   && !empty($_POST['p_hearing'])){  
        
        $cnr_no=$_POST['cnr_no']; 
        $jname=$_POST['jname'];
        $b_on_date=$_POST['b_on_date'];  
        $h_date=$_POST['h_date'];
        $p_hearing=$_POST['p_hearing'];

        $query=mysqli_query($conn,"SELECT * FROM updatecase WHERE cnr_no='".$cnr_no."'");
        $sql="INSERT INTO updatecase(cnr_no,jname, b_on_date, h_date, p_hearing) VALUES('$cnr_no','$jname','$b_on_date','$h_date','$p_hearing')";  
        if(mysqli_query($conn,$sql))
          {
            header('location: try.html');  
            } 
        else {  
        echo "Failure!";  
        }  
      
         
      
    } else {  
        echo "All fields are required!";  
        }  
    }  
    ?>  