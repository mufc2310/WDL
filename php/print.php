<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>




	<title> YOUR REGESTRATION INFO</title>
	<style>
	table{
		border:2px solid black;
	}
	table td {
		padding:2px;
	}
	table tr :nth-child(odd){
		background-color: yellow;
	}
		</style>
	}
	}
	}
</head>
<body>

<?php

require_once 'function,php';
if($_POST){
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$adress=$_POST['adress'];
	$dob=$_POST['dob'];
	$sem=$_POST['sem'];
	$semai=$_POST['semail'];
	$dept=$_POST['dept'];
  $batch=$_POST['batch'];
  if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!
  	empty($address)&&!
  	empty($dob)&&! empty($sem)&&! empty($semail)&&! empty($dept)&&!  empty($batch))

}


?>
<table>
	
<tr>
<td>ROLL NO</td>
<td>?php echo fix_name($rollno);?</td>
</tr>
<tr>
<td>name</td>
<td>?php echo fix_name($name);?</td>
</tr>

<tr>
<td>gender</td>
<td>?php echo fix_name($gender);?</td>
</tr>

<tr>
<td>address</td>
<td>?php echo fix_name($address);?</td>
</tr>

<tr>
<td>date of birth</td>
<td>?php echo fix_name($dob);?</td>
</tr>

<tr>
<td>semester</td>
<td>?php echo fix_name($sem);?</td>
</tr>
<tr>
<td>email</td>
<td>?php echo fix_name($email);?</td>
</tr>

<tr>
<td>department</td>
<td>?php echo fix_name($dept);?</td>
</tr>
<tr>
<td>batch</td>
<td>?php echo fix_name($batch);?</td>
</tr>
</table>


<?php
}
else{
	echo "<span>something is missin";
	header('refresh:2, url=../registration.html)
}
}
else{
	header('Refresh:0, url=registration.hrtm');
}
?>

}

</body>
</html>