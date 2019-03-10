<?php
$db=mysqli_connect('localhost','root','','Feedback');
$tot=0;
$dept=$_POST['dept'];

$q1="select * from student where department='$dept'";
$res=mysqli_query($db,$q1);
$output=array();
if($res){

while($row=mysqli_fetch_array($res)){

	$output []=array('name'=>$row['name'],'rollno'=>$row['rollno'],'batch'=>$row['batch'],'department'=>$row['department'],'mobile'=>$row['mobile'],'mail'=>$row['mail'],'course'=>$row['course'],'shift'=>$row['shift']);
}



$q2="select * from department where dept='$dept'";
$res=mysqli_query($db,$q2);
$row2=mysqli_fetch_array($res);
$tot=$row2['total'];


}
echo json_encode(array('result'=>$output,'total'=>$tot));

?>



