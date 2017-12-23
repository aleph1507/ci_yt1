<?php
	// echo 'I am view for User_details';
?>

<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<table>
		<tr>
			<th>User ID</th>
			<th>UserName</th>
			<td>Company</td>
		</tr>
		<?php foreach($userArray as $row): ?>
			<tr>
				<td><?= $row->id; ?></td>
				<td><?= $row->username; ?></td>
				<td><?= $row->company; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<div id="user"></div>
</body>
</html>

<script type="text/javascript">
	// var userArray = < ? = //json_encode($userArray); ? >
</script>

<?php 
	// echo '<pre>';

	// print_r(json_encode($userArray));
	// echo '</pre>';
?>

<script type="text/javascript">
	// var userdiv = document.getElementById("user");
	// userdiv.innerHTML += userArray.username + "<br>" + userArray.company;
</script>