<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form data
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];

	// Validate form data
	$errors = array();
	if (empty($name)) {
		$errors[] = "Name is required";
	}
	if (empty($email)) {
		$errors[] = "Email is required";
	}
	if (empty($password)) {
		$errors[] = "Password is required";
	}
	if ($password != $confirm_password) {
		$errors[] = "Passwords do not match";
	}

	// If there are errors, display them
	if (!empty($errors)) {
		echo "<div class=\"container\">";
		echo "<h1>Registration Form</h1>";
		echo "<ul class=\"error\">";
		foreach ($errors as $error) {
			echo "<li>$error</li>";
		}
		echo "</ul>";
		echo "<a href=\"registration.php\">Back to Registration Page</a>";
		echo "</div>";
	} else {
		// If there are no errors, save data to database or do other necessary actions
		// TODO: Add code here to save data to database or do other necessary actions
		echo "<div class=\"container\">";
		echo "<h1>Registration Successful</h1>";
		echo "<p>Welcome, $name!</p>";
		echo "</div>";
	}
}
?>
