<?php 

$con=mysqli_connect('localhost','root');

if($con)
{
	echo "connection successful";
}
	else
		{
	echo "connection failed";
}

mysqli_select_db($con, 'health');

$Name=$_REQUEST['fname'];
$Age=$_REQUEST['age'];
$gender=$_POST['gen'];

$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$education =  $_REQUEST['optionsRadios2'];
$unvi=$_REQUEST['unv'];


$query = "insert into userinfo(user,age,email,gender,address,education,university) values ('$Name','$Age','$email','$gender','$address',
'$education','$unvi')";

mysqli_query($con,$query);

echo "$query";
/*mysqli_query($con,$query);*/
header('location:index.php');

 ?>

