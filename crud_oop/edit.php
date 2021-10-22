<?php
	include('conn.php');
	session_start();
	
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$conn->query("update member set firstname='$firstname', lastname='$lastname' where memberid='$id'");
		$_SESSION['msg']="Member Updated Succesfully!";
		header('location:index.php');
		
	}

	/*
	$id=$_GET['id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	$conn->query("update member set firstname='$firstname', lastname='$lastname' where memberid='$id'");
	$_SESSION['msg']="Member Updated Succesfully";
	header('location:index.php');
	*/
	
	

?>


<!-- Edit -->
<!DOCTYPE html>
<html>
	<head>
			<title>PHP - OOP CRUD Operation</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
               
				<?php
					$id = $_GET['id'];
					$edit=$conn->query("select * from member where memberid='".$id."'");
					$row=$edit->fetch_array();
					
				?>
				<div class="container">
				 <h3 class="col-md-12 text-center">Edit Member</h3>
          
				<form method="POST" action="edit.php">
					<input type="hidden" name="id" value="<?php echo $row['memberid']; ?>" />
					<div class="row">
						<div class="col-md-2 col-md-offset-2">
							<label style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-md-6">
							<input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2 col-md-offset-2">
							<label style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-md-6">
							<input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2 col-md-offset-6">
							<input type="submit"  class="btn btn-success" name="edit" value="Update">
						</div>
					</div>
				</form>
            </div>
        </body>
</html>