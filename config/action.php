<?php
include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

    $commentnew = filter_var($comment, FILTER_SANITIZE_STRING);

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$commentnew')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
        header("Location: ../feedback.php");
		echo "<script>alert('Comment added successfully.');</script>";        
	} else {
        header("Location: ../feedback.php");
		echo "<script>alert('Comment does not add.');</script>";        
	}
}
?>