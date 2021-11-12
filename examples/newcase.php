<?php  
require 'conn.php';
if(isset($_POST['add'])){  
    if(!empty($_POST['case_type']) && !empty($_POST['filing_number']) && !empty($_POST['filing_date'])  && !empty($_POST['reg_no'])  && !empty($_POST['reg_date'])  && !empty($_POST['cnr_no'])  && !empty($_POST['first_hearing_date'])  && !empty($_POST['next_hearing_date'])  && !empty($_POST['stage_case'])  && !empty($_POST['court_name'])  && !empty($_POST['pname'])  && !empty($_POST['paname'])  && !empty($_POST['rname'])  && !empty($_POST['raname']) && !empty($_POST['ia_no'])  && !empty($_POST['party'])  && !empty($_POST['date_of_filing'])  && !empty($_POST['jname'])  && !empty($_POST['b_on_date'])  && !empty($_POST['h_date'])   && !empty($_POST['p_hearing'])){  
        
        $case_type=$_POST['case_type'];  
        $filing_number=$_POST['filing_number'];
        $filing_date=$_POST['filing_date'];  
        $reg_no=$_POST['reg_no'];
        $reg_date=$_POST['reg_date'];  
        $cnr_no=$_POST['cnr_no'];
        $first_hearing_date=$_POST['first_hearing_date'];  
        $next_hearing_date=$_POST['next_hearing_date'];
        $stage_case=$_POST['stage_case'];  
        $court_name=$_POST['court_name'];
        $pname=$_POST['pname'];  
        $paname=$_POST['paname'];
        $rname=$_POST['rname'];  
        $raname=$_POST['raname'];
        $ia_no=$_POST['ia_no'];  
        $party=$_POST['party'];
        $date_of_filing=$_POST['date_of_filing'];  
        $jname=$_POST['jname'];
        $b_on_date=$_POST['b_on_date'];  
        $h_date=$_POST['h_date'];
        $p_hearing=$_POST['p_hearing'];

        $query=mysqli_query($conn,"SELECT * FROM newcase WHERE cnr_no='".$cnr_no."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows==0)  
        {  
        $sql="INSERT INTO newcase(case_type, filing_number, filing_date, reg_no, reg_date, cnr_no, first_hearing_date, next_hearing_date, stage_case, court_name, pname, paname, rname, raname, ia_no, party, date_of_filing, jname, b_on_date, h_date, p_hearing) VALUES('$case_type','$filing_number','$filing_date','$reg_no','$reg_date','$cnr_no','$first_hearing_date','$next_hearing_date','$stage_case','$court_name','$pname','$paname','$rname','$raname','$ia_no','$party','$date_of_filing','$jname','$b_on_date','$h_date','$p_hearing')";  
        if(mysqli_query($conn,$sql))
          {
            header('location: try.html');  
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