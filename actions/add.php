<!doctype html>
<html lang="en">
<head>
	<title>Add Data</title>
	<meta name="description" content="Add new contact">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon-16x16.png">
</head>

<body>
	<?php
		include_once("../connect.php");

		if (isset($_POST['Submit'])) {
			$name = mysqli_real_escape_string($mysqli, $_POST['name']);
			$age = mysqli_real_escape_string($mysqli, $_POST['age']);
			$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
			$email = mysqli_real_escape_string($mysqli, $_POST['email']);

			if (empty($name) || empty($age) || empty($phone) || empty($email)) {

				if (empty($name)) {
					echo "<script type='text/javascript'>
						alert('Name field is empty');
						window.location.href = '../index.php';
					  </script>";
				}

				if (empty($age)) {
					echo "<script type='text/javascript'>
						alert('Age field is empty.');
						window.location.href = '../index.php';
					  </script>";
				}

				if (empty($phone)) {
					echo "<script type='text/javascript'>
						alert('Phone field is empty.');
						window.location.href = '../index.php';
					  </script>";
				}

				if (empty($email)) {
					echo "<script type='text/javascript'>
						alert('Email field is empty.');
						window.location.href = '../index.php';
					  </script>";
				}

			} else {

				$result = mysqli_query($mysqli, "INSERT INTO contact(name,age,phone,email) VALUES('$name','$age','$phone','$email')");

				echo "<script type='text/javascript'>
						alert('Contact added successfully');
						window.location.href = '../index.php';
				  	  </script>";						
			}
		}
	?>
</body>

</html>