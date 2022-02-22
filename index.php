<?php
include_once("connect.php");
$result = mysqli_query($mysqli, "SELECT * FROM contact");
?>

<!doctype html>
<html lang="en">
<head>
	<title>Welcome to my contact App</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./assets/styles.css">
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Simple Web Application developed by Juan Pablo Franco S.">
</head>

<body>
	<table>
		<tr>
			<td>Name <i class="fa-solid fa-user-tie"></i></td>
			<td>Age <i class="fas fa-birthday-cake"></i></td>
			<td>Phone <i class="fa-solid fa-phone"></i></td>
			<td>Email <i class="fas fa-envelope"></i></td>
			<td>Actions <i class="fa-solid fa-exclamation"></i></td>
			<td><i class="fa-solid fa-magnifying-glass" onclick=""></i></td>
		</tr>
		<?php
			while ($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $res['name'] . "</td>";
				echo "<td>" . $res['age'] . "</td>";
				echo "<td>" . $res['phone'] . "</td>";
				echo "<td>" . $res['email'] . "</td>";
				echo "<td colspan='2' class='actions'><a href=\"./actions/edit.php?id=$res[id]\"><i class='fas fa-edit'></i></a> | 
								<a href=\"./actions/delete.php?id=$res[id]\" 
									onClick=\"return confirm('Are you sure you want to delete?')\"><i class='fas fa-trash'></i>
								</a>
					  </td>";
			}
		?>
	</table>
	<div class="add">
		<a href="./actions/add.html">
			<i class="fas fa-user-plus"></i>
		</a>
	</div>	
</body>
</html>