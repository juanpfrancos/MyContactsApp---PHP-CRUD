<?php
include_once("../connect.php");

if (isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);

	if (empty($name) || empty($age) || empty($phone) || empty($email)) {
		if (empty($name)) {
			echo "<h1>Name field is empty.</h1>";
		}
		if (empty($age)) {
			echo "<h1>Age field is empty.</h1>";
		}
		if (empty($phone)) {
			echo "<h1>Age field is empty.</h1>";
		}
		if (empty($email)) {
			echo "<h1>Email field is empty.</h1>";
		}
	} 
	else {
		$result = mysqli_query($mysqli, "UPDATE contact SET name='$name',age='$age', phone='$phone', email='$email' WHERE id=$id");
		echo "<script type='text/javascript'>
			alert('Edit Successfully');
			window.location.href = '../index.php';
		</script>";
	}
}
?>

<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM contact WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	$name = $res['name'];
	$age = $res['age'];
	$phone = $res['phone'];
	$email = $res['email'];
}
?>

<!doctype html>
<html lang="en">
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../assets/styles.css">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon-16x16.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Modify contact information">
</head>

<body>
	<form name="form1" method="post" action="edit.php">
		<div class="form">
			<input type="text" name="name" required placeholder="Name" value="<?php echo $name; ?>">
			<input type="number" name="age" required placeholder="Age" value="<?php echo $age; ?>">
			<input type="number" name="phone" required placeholder="Phone" value="<?php echo $phone; ?>">
			<input type="email" name="email" required placeholder="E-mail" value="<?php echo $email; ?>">
			<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
			<input type="submit" name="update" value="Update">
		</div>
	</form>
	<div class="add">
		<a href="../index.php">
			<i class="fa-solid fa-house"></i>
		</a>
	</div>	
</body>
</html>