<!DOCTYPE html>
<html lang="th">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
<body>
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Nickname</th>
			<th>Nationality</th>
			<th>Gender</th>
			<th>Date</th>
			<th>Addres</th>
			<th>Tambon</th>
			<th>District</th>
			<th>Province</th>
			<th>Telephone</th>
			<th>E-mail</th>
			<th>Disease</th>
			<th>Size</th>
			<th>TypeR</th>
		</tr>
	</thead>
<tbody>
<?php
include("conn/mysqlconn.php");
$sql = "SELECT * from user2";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		?>
			<tr>
				<td><?php echo $row["userid"];?></td>
				<td><?php echo $row["firstname"];?></td>
				<td><?php echo $row["lastname"];?></td>
				<td><?php echo $row["nickname"];?></td>
				<td><?php echo $row["nationality"];?></td>
				<td><?php echo $row["gender"];?></td>
				<td><?php echo $row["day"];?></td>
				<td><?php echo $row["address"];?></td>
				<td><?php echo $row["tambon"];?></td>
				<td><?php echo $row["district"];?></td>
				<td><?php echo $row["province"];?></td>
				<td><?php echo $row["telephone"];?></td>
				<td><?php echo $row["email"];?></td>
				<td><?php echo $row["disease"];?></td>
				<td><?php echo $row["size"];?></td>
				<td><?php echo $row["typeR"];?></td>
			</tr>
		<?php

		//echo "userID: ".$row["userid"]." - Name: ".$row["firstname"]. " ".$row["lastname"]." (".$row["nickname"].") ".$row["nationality"]." ".$row["gender"]." ".$row["day"]." ".$row["address"]." ".$row["tambon"]." ".$row["district"]." ".$row["province"]." Tel: ".$row["telephone"]." ".$row["email"]." ".$row["disease"]." ".$row["size"]." ".$row["typeR"]."<br>";
	}
} else{
		echo "0 result";
	}
?> 
</tbody>
	</table>
</body>