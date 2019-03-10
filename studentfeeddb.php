<?php
include('db.php');
session_start();
$output=0;
for($i=1;$i<=14;$i++){
	$output=$output+(int)$_POST[$i];

}

$department=$_SESSION['dept'];
$q1="select * from department where dept='$department'";
$res=mysqli_query($db,$q1);
if(mysqli_num_rows($res)==1){
	$row=mysqli_fetch_array($res);
	$tot=$output+(int)$row['total'];
	$q2="update department set total='$tot' where dept='$department'";
	$res1=mysqli_query($db,$q2);
	if($res){
		echo '<script>alert("your total score is:'.$output.'");location.href="index.php"</script>';
	}


}
else{
	$q3="insert into department(dept,total)values('$department','$output')";
	$res2=mysqli_query($db,$q3);
	if($res2){
		echo '<script>alert("your total score is:'.$output.'");location.href="index.php"</script>';

	}



}

?>