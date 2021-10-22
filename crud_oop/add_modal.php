<?php
	session_start();
?>

<!-- Add New -->
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
					if(isset($_SESSION['msg'])){
				?>		
					<div class="col-md-offset-2 col-md-8 col-md-offset-2 alert alert-warning alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $_SESSION['msg']; ?>
					</div>				
				<?php 
					unset($_SESSION['msg']);
					} 
				?>
								
				<div class="container">
					<h2 class="col-md-12 text-center">Add New Member</h2>
            
				<form method="POST" action="addnew.php">
					<div class="row">
						<div class="col-md-2 col-md-offset-2">
							<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="firstname">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2 col-md-offset-2">
							<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="lastname">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2 col-md-offset-6">
							<input type="submit"  class="btn btn-success" value="submit">
						</div>
					</div>
				  </form>	
                </div> 
				
	</body>
</html>    
	
               
				
           