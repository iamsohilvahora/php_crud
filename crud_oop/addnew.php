<?php
	include('conn.php');
	session_start();
	
	if(isset($_POST['firstname']) && isset($_POST['lastname'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		
		if(!empty($firstname) && !empty($lastname)){
			$conn->query("insert into member (firstname, lastname) values ('$firstname', '$lastname')");
			$_SESSION['msg']="Member added succesfully!";
			header('location:index.php');
		}
		else{
			$_SESSION['msg']="Please fill all fields!";
			header('location:add_modal.php');
		}
	}
	
	
	
	
	
	
	

?>