<?php
session_start();
include('db.php');
$output=0;
for($i=1;$i<=14;$i++){
	$output=$output+(int)$_POST[$i];

}
$fdepartment=$_SESSION['dept'];
$name=$_SESSION['fname'];
$q1="select * from fdepartment where dept='$fdepartment'";
$res=mysqli_query($db,$q1);
if(mysqli_num_rows($res)==1){
	$row=mysqli_fetch_array($res);
	$tot=$output+(int)$row['total'];
	$q2="update fdepartment set total='$tot' where dept='$fdepartment'";
	$res1=mysqli_query($db,$q2);
	if($res){
		$q5="update faculty set marks='$output' where name='$name'";
		mysqli_query($db,$q5);
		echo '<script>alert("your total score is:'.$output.'");location.href="index.php"</script>';
	}


}
else{
	$q3="insert into fdepartment(dept,total)values('$fdepartment','$output')";
	$res2=mysqli_query($db,$q3);
	if($res2){
		$q6="update faculty set marks='$output' where name='$name'";
		mysqli_query($db,$q6);
		echo '<script>alert("your total score is:'.$output.'");location.href="index.php"</script>';

	}



}

?>