<?php
session_start();
require_once('include/config.php');
if(isset($_POST['adsub'])){
	$username=$_POST['username1'];
	$password=$_POST['password2'];
	$stmt=$pdo->prepare("select * from admintb where username=?");
	$stmt->execute([$username]);
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	if($row && password_verify($password,$row['password']))
	{
		session_regenerate_id(true);
		$_SESSION['username']=$username;
		header("Location:admin-panel1.php");
	}
	else
		echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index.php';</script>");
}
if(isset($_POST['update_data']))
{
	$contact=$_POST['contact'];
	$status=$_POST['status'];
	$stmt=$pdo->prepare("update appointmenttb set payment=? where contact=?");
	$stmt->execute([$status,$contact]);
	if($stmt->rowCount()>=0)
		header("Location:updated.php");
}




function display_docs()
{
	global $con;
	$query="select * from doctb";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$name=$row['name'];
		# echo'<option value="" disabled selected>Select Doctor</option>';
		echo '<option value="'.$name.'">'.$name.'</option>';
	}
}

if(isset($_POST['doc_sub']))
{
	$name=$_POST['name'];
	$stmt=$pdo->prepare("insert into doctb(name)values(?)");
	$stmt->execute([$name]);
	if($stmt->rowCount()>0)
		header("Location:adddoc.php");
}
