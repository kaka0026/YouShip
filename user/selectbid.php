<?php
    require 'dbconnect.php';
    session_start();
$id=$_GET['id'];
$date=date('y-m-d');
$qry="SELECT * FROM bid where id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);

$insert="INSERT INTO booked (user_id,b_id,s_id,p_id,book_date,price) values('".$row['userid']."','".$id."','".$row['shipperid']."','".$row['postid']."','".$date."','".$row['price']."')";
$result=mysqli_query($conn,$insert);
if($insert){
	// echo "insert";
	$bidu="UPDATE bid SET isactive=0 where id=$id";
	$rsu=mysqli_query($conn,$bidu);

	$pu="UPDATE req_quote SET isactive=0 where id='".$row['postid']."'";
	$prs=mysqli_query($conn,$pu);
	header("location:vieworder.php");
}
?>