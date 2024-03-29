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
	max-width:700px;
	min-height:800px;
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
</style>
  </head>
<body>
	
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Appointment Booking</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<form method="post" action="appointment.php" autocomplete="on">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Full Name</label>
					<input name="name" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Phone Number</label>
					<input name="phone" type="number" class="input" >
				</div>
				<div class="group">
					<label for="pass" class="label">Email</label>
					<input name="email" type="email" class="input" >
				</div>
				<div class="group">
					<label for="pass" class="label">Case Type</label>
					<?php
     require 'conn.php';
	
	
	 $date= $_GET['date'];
    
    $query=mysqli_query($conn,"SELECT * FROM datecheck WHERE date='".$date."'");  
    $numrows=mysqli_num_rows($query);  
   
?>
					<select id="country" name="case_type" class="input" >

						<option style="color: black;" value="Robbery">Robbery</option>
						<option style="color: black;"value="Family">Family</option>
						<option style="color: black;"value="Labour">Labour</option>
						<option style="color: black;"value="Property">Property</option>
					  </select>
				</div>
				<div class="group">
					<label for="pass" class="label">Date</label>
					<input name="date" type="date" class="input" value="<?php echo $date?>" >
				</div>
				<div class="group">
					<label for="pass" class="label">Time</label>
					<select id="country" name="time" class="input" >
					<option style="color: black;"value="11-12pm">Select</option>
<?php 
 if($numrows > 0)
 {
   while($row = mysqli_fetch_array($query))   
{
?>

						<option style="color: black;" value="10-11am" <?php if($row['A']=="T"){?>hidden<?php } ?>>10-11am</option>
						<option style="color: black;"value="11-12pm" <?php if($row['B']=="T"){?>hidden<?php } ?>>11-12am</option>
						<option style="color: black;"value="12-1pm" <?php if($row['C']=="T"){?>hidden<?php } ?>>12--1pm</option>
						<option style="color: black;"value="02-3pm" <?php if($row['D']=="T"){?>hidden<?php } ?>>2-3pm</option>
		
					  </select>
				</div><?php }} ?>

				<div class="group">
					<label for="" class="label">Details</label>
					<textarea name="details" type="TextArea" class="input"></textarea>
				</div>

				<div class="group">
					<input type="submit" class="button" value="submit" name="submit">
				</div>
				<div class="hr"></div>
				
				<div class="foot-lnk">
					<a href="index.html">Home</a>
				</div>
			</div>
		</form>
		</div>	
	</div>
			
</div>
</body>
</html>