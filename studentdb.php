<?php
include("db.php");
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$batch=$_POST['batch'];
$department=$_POST['department'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$course=$_POST['course'];
$shift=$_POST['shift'];
$password=$_POST['password'];





$q1="INSERT INTO `student` ( `name`, `rollno`, `batch`, `department`, `mobile`, `mail`, `course`, `shift`, `password`) VALUES ('$name', '$rollno', '$batch', '$department', '$mobile', '$mail', '$course', '$shift', '$password')";
$res=mysqli_query($db,$q1);
if($res){
	echo '<script>alert("your registration is succesful");location.href="index.php"</script>';

}
else{
		echo '<script>alert("your registration is not succesful");locatio.href="student_register.php"</script>';

}
?>
