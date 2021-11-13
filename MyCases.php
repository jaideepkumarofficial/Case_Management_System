<!DOCTYPE html>
<html lang="en">
    <head>
<style>
body{
	margin:0;
	color:#6a6f8c;
	background:#373738ad;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:800px;
	min-height:1000px;
	position:relative;
	background:url(images/Appointment/5.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(24, 25, 27, 0.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:red;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:red;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:red;
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:red;
}
.foot-lnk{
	text-align:center;
}

.collapsible {
  background-color: rgb(173, 167, 167);
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: rgb(105, 102, 102);
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
table, th, td {
  border:1px solid black;
}
</style>
  </head>
<body>

<div class="login-wrap">
	<div class="login-html">
		<h2 style="color:thistle;align-items: center;">Case History</h2>

<p>PRL. CITY CIVIL AND SESSION JUDGE</p>

<button type="button" class="collapsible" style="border-color: red;border-style:groove;">CASE DETAILS</button>
<div class="content">
	
	<table style="width:50%">



<?php
                  require 'conn.php';

				  $cnr_no= $_POST['cnr_no'];
                    
					
                    $query=mysqli_query($conn,"SELECT * FROM newcase WHERE cnr_no='".$cnr_no."'");  
                    $numrows=mysqli_num_rows($query);  
                    if($numrows > 0)
                    {
                      while($row = mysqli_fetch_array($query))   
                {
                  
                  ?>
				  
				  
                  
        
		<tr><br>
			  <td style="color:black"><b>Case Type<b></td>
			  
			  <td><?php echo $row['case_type'];?></td>
			  
		</tr>
		<tr>
			  <td style="color:black"><b>Filing Number<b></td>
			  <td><?php echo $row['filing_number'];?></td>
			  
		</tr>
	   <tr>
			  <td style="color:black"><b>Filing Date<b></td>
			  <td><?php echo $row['filing_date'];?></td>
			  
		</tr>
		<tr>
			  <td style="color:black"><b>Registeration Number<b></td>
			  <td><?php echo $row['reg_no'];?></td>
			  
		</tr>
		<tr>
			  <td style="color:black"><b>Registeration Date<b></td>
			  <td><?php echo $row['reg_date'];?></td>
			  
		</tr>
	   <tr>
			  <td style="color:black"><b>CNR Number<b></td>
			  <td><?php echo $row['cnr_no'];?></td>
			  
		</tr>
	  </table><br></div>
	  
<p></p>
<button type="button" class="collapsible" style="border-color: red;border-style:groove;">CASE STATUS</button>
<div class="content">
	<table style="width:50%"><br>
		<tr>
			  <td style="color:black"><b>First Hearing Date<b></td>
			  <td><?php echo $row['first_hearing_date'];?></td>
			  
		</tr>
		<tr>
			  <td style="color:black"><b>Next Hearing Date<b></td>
			  <td><?php echo $row['next_hearing_date'];?></td>
			  
		</tr>
	   <tr>
			  <td style="color:black"><b>Stage of Case<b></td>
			  <td><?php echo $row['stage_case'];?></td>
			  
		</tr>
		<tr>
			  <td style="color:black"><b>Court No and Judge<b></td>
			  <td><?php echo $row['court_name'];?></td>
			  
		</tr>
	  </table><br></div><p></p>
<button type="button" class="collapsible" style="border-color: red;border-style:groove;">PETITIONER AND ADVOCATE</button>
<div class="content">
	<table style="width:50%"><br>
		<tr>
			  <td style="color:black"><b>Petitioner<b></td>
			  <td><?php echo $row['pname'];?></td>
			  
		</tr>
		<tr>
			  <td style="color:black"><b>Advocate<b></td>
			  <td><?php echo $row['paname'];?></td>
			  
		</tr></table><br></div><p></p>
<button type="button" class="collapsible" style="border-color: red;border-style:groove;">RESPONDENT AND ADVOCATE</button>
<div class="content">
 <table style="width:50%"><br>
	<tr>
		  <td style="color:black"><b>Respondent<b></td>
		  <td><?php echo $row['rname'];?></td>
		  
	</tr>
	<tr>
		  <td style="color:black"><b>Advocate<b></td>
		  <td><?php echo $row['raname'];?></td>
		  
	</tr></table><br>
</div><p></p>
<button type="button" class="collapsible" style="border-color: red;border-style:groove;">IA DETAILS</button>
<div class="content">
	<table style="width:50%"><br>
		<tr>
			  <td style="color:black"><b>IA Number<b></td>
			  <td style="color:black"><b>Party</b></td><td style="color:black"><b>Date of Filing</b></td></tr>
		<tr>
			  <td ><?php echo $row['ia_no'];?></td>
			  <td><?php echo $row['party'];?></td>
			<td ><?php echo $row['date_of_filing'];?></td>
			  
			  
			  
		</tr><?php }} ?></table><br></div><p></p>
<button type="button" class="collapsible" style="border-color: red;border-style:groove;">HISTORY OF CASE HEARING</button>
<div class="content">
	<table style="width:100%"><br>	
		<tr>
			  <td style="color:black"><b>Judge<b></td><td style="color:black"><b>Business on Date<b></td><td style="color:black"><b>Hearing Date<b></td><td style="color:black"><b>Purpose of Hearing<b></td>
			  
			  
		</tr><?php
                  require 'conn.php';
                  
                 
				  $cnr_no= $_POST['cnr_no'];
                    
					
                    $query=mysqli_query($conn,"SELECT * FROM updatecase WHERE cnr_no='".$cnr_no."'");  
                    $numrows=mysqli_num_rows($query);  
                    if($numrows > 0)
                    {
                      while($row = mysqli_fetch_array($query))   
                {
                  
                  ?>
		<tr>
			  <td style="color:black"><?php echo $row['jname'];?></td>
			  <td><?php echo $row['b_on_date'];?></td><td><?php echo $row['h_date'];?></td><td><?php echo $row['p_hearing'];?></td>
			  
		</tr><?php }} ?>
	   
	  </table><br>  </div>

	</div>
			
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</body>
</html>