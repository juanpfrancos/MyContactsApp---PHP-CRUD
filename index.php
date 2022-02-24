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
	<div id="searchContainer">
		<input id="search" type="text" placeholder="Search" oninput="Search()" autofocus="autofocus">
	</div>
	<div id="add">
		<a href="./actions/add.html">
			<i class="fas fa-user-plus"></i>
		</a>
	</div>	
	<table id="datatable">
		<tr>
			<th>Name <i class="fa-solid fa-user-tie"></i></th>
			<th>Age <i class="fas fa-birthday-cake"></i></th>
			<th>Phone <i class="fa-solid fa-phone"></i></th>
			<th>Email <i class="fas fa-envelope"></i></th>
			<th>Actions <i class="fa-solid fa-exclamation"></i></th>
			<th><i id="icon" class="fa-solid fa-magnifying-glass" onclick="activateBar()"></i></th>
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
									onClick=\"return confirm('Are you sure you want to delete?')\"><i class='fas fa-trash'></i></a>
								| 
								<a href=\"tel:$res[phone]\">
									<i class='fa-solid fa-phone'></i></a>
								|<a href=\"mailto:$res[email]\"><i class='fa-solid fa-envelope'></i></a>
					  </td>";
			}
		?>
	</table>
	<script src="./assets/scripts.js"></script>
</body>
</html>