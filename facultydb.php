<?php
include("db.php");
$name=$_POST['name'];
$department=$_POST['department'];
$joining_date=$_POST['joining_date'];
$designation=$_POST['designation'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$userid=$_POST['userid'];
$password=$_POST['pass'];

$q1="INSERT INTO `faculty` (`name`, `department`, `joining_date`, `designation`, `mobile`, `mail`, `userid`, `password`) VALUES ('$name', '$department', '$joining_date', '$designation', '$mobile', '$mail', '$userid', '$password')";
$res=mysqli_query($db,$q1);
if($res){
	echo '<script>alert("your registration is succesful");location.href="index.php"</script>';

}
else{
		echo '<script>alert("your registration is not succesful");locatio.href="faculty_register.php"</script>';

}


?>