<?php
include("../connect.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM contact WHERE id=$id");
echo "<script type='text/javascript'>
        alert('Delete Successfully');
        window.location.href = '../index.php';
    </script>";
?>
