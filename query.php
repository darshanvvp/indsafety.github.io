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

$userrr=$_POST['yourname'];

$emailll=$_POST['mail'];
$messs=$_POST['msg'];



$queryyy = "insert into feedbacks(name,email,message) values ('$userrr','$emailll','$messs')";

mysqli_query($con,$queryyy);

echo "$queryyy";
/*mysqli_query($con,$queryyy);*/
header('location:index.php');


 ?>