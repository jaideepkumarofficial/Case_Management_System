<?php	
$x=$_POST['fnum'];
$y=$_POST['snum'];
$sum=$x+$y;
?>
 
<body>
<form method="post">
Result  <input type="text" value="<?php echo @$sum;?>"/><hr/>
Enter first number <input type="text" name="fnum"/><hr/>
Enter second number <input type="text" name="snum"/><hr/>	   		   
<input type="submit" value="ADD"/>
</form>
</body>