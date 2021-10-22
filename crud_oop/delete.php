<?php
	include('conn.php');
	session_start();

	$id = $_GET['id'];
	
	$run = $conn->query("delete from member where memberid = $id");
	
	if($run){
		$_SESSION['msg'] = 'Member Deleted Succesfully!';
	    header('location : index.php');		
	}
		
?>	