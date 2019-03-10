<?php
session_start();
include("db.php");
$name=$_POST['userid'];
$pass=$_POST['pass'];
$type=$_POST['type'];
if ($type=="student"){

	$q1="select * from student where rollno='$name' and password='$pass'";
	$res=mysqli_query($db,$q1);
	if(mysqli_num_rows($res)==1){
		$row=mysqli_fetch_array($res);
		$_SESSION['dept']=$row['department'];
			echo '<script>alert("your login is succesful");location.href="test.php"</script>';

	}
	else{
			echo '<script>alert("your login is not succesful");location.href="index.php"</script>';

	}

}
else{


$q1="select * from faculty where userid='$name' and password='$pass'";
	$res=mysqli_query($db,$q1);
	if(mysqli_num_rows($res)==1){
				$row=mysqli_fetch_array($res);
				echo $row['department'];
				$_SESSION['dept']=$row['department'];

			echo '<script>alert("your login is succesful");location.href="facultyfeed.php"</script>';

	}
	else{
			echo '<script>alert("your registration is not succesful");location.href="index.php"</script>';

	}



}



?>