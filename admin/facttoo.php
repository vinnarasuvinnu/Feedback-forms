<?php
/*$db=mysqli_connect('localhost','root','','Feedback');
*/
include("../db.php");

$tot=0;
$dept=$_POST['dept'];
//$dept="Computer Science";

$q1="select * from faculty where department='$dept'";
$res=mysqli_query($db,$q1);
$output=array();
if($res){

while($row=mysqli_fetch_array($res)){

	$output []=array('name'=>$row['name'],'join_data'=>$row['joining_date'],'designation'=>$row['designation'],'department'=>$row['department'],'mobile'=>$row['mobile'],'mail'=>$row['mail'],'userid'=>$row['userid'],'mark'=>$row['marks']);
}



$q2="select * from fdepartment where dept='$dept'";
$res=mysqli_query($db,$q2);
$row2=mysqli_fetch_array($res);
$tot=$row2['total'];


}
echo json_encode(array('result'=>$output,'total'=>$tot));

?>



