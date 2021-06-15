<?php 
$s=$_POST['start'];
$e=$_POST['end'];
$f=$_POST['find'];

if($_POST['Sub']=='Sub')
{
	while($s<=$e)
	{
		echo $s;
		if($s==$f)
		{
			echo ' <-- here';
		}
		echo '<br>';
		$s++;
	}
}

?>

<html>
<form action="" method="POST">
	Start<input type="number" name="start"><br>
	End<input type="number" name="end"><br>
	Find<input type="number" name="find"><br>
	<input type="submit" name="Sub" value="Sub">
</form>