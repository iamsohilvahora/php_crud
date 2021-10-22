<?php 
	include('conn.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP - OOP CRUD Operation</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		table th{
			text-align :center;
		}
	</style>
</head>
<body>
<div class="container">
		<?php
			if(isset($_SESSION['msg'])){
				?>
				<div class="alert alert-success alert-dismissible" role="alert" style="margin-left:auto; margin-right:auto; padding:auto; width:70%;">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $_SESSION['msg']; ?>
				</div>
			<?php
				unset($_SESSION['msg']);
				}
			?>

	<div style="height:30px;"></div>
	<div class="well" style="margin-left:auto; margin-right:auto; padding:auto; width:70%;">
		<span style="font-size:25px; color:blue"><strong>PHP - OOP CRUD Operation</strong></span>	
		<span class="pull-right"><a href="add_modal.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:15px;"></div>
		
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php     
				$query=$conn->query("select * from `member`");
				while($row = $query->fetch_array()){
			?>
					<tr class='text-center'>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['memberid']; ?>" class="pull-left btn btn-success"><span class="glyphicon glyphicon-edit"></span> Update</a> || 
							<a href="delete.php?id=<?php echo $row['memberid']; ?>" class="pull-right btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
						</td>
					</tr>
					<?php
						}
			
					?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>