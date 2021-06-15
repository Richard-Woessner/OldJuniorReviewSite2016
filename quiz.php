<?php 
	
	$x = $_POST["start"];
	$x2 = $_POST["end"];
	$y = 100;
	$count = 1;
	$count2=1;
	$color= array('red','blue','green','yellow','purple');
	
	
	

	if($_POST["Submit"]=='sub')
	{
		while($count2<=100)
		{
			echo '<span style="color:red">'.$count2.'</span>----
				<span style="color:'.$color[mt_rand(0,4)].'">';
			
				
				while($count<=mt_rand($x,$x2))
				{
					echo $count.', ';
					$count++;
				}
				$count=1;
				echo '</span><br>';
				
			
			
			$count2++;
		}}
	
	

?>
<html>

<form action="" method="POST" >
S<input type="number" name="start"><br>
E<input type="number" name="end"><br>
<input type="submit" name="Submit" value="sub">

</form>





</html>












