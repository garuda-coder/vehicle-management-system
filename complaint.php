<?php
// Replace "hostname", "username", "password", and "database_name" with your own credentials
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "vehicle management";

// Create connection
$conn = new mysqli($hostname, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// If the connection is successful, you can use $conn to perform database queries
// For example, to insert data into a "complaints" table, you can use the following code:
if (isset($_POST["name"])) {
  $name = $_POST["name"];
} else {
  $name = "";
}
if (isset($_POST["email"])) {
  $email = $_POST["email"];
} else {
  $email = "";
}
if (isset($_POST["phone"])) {
  $phone = $_POST["phone"];
} else {
  $phone = "";
}
if (isset($_POST["complaint"])) {
  $complaint = $_POST["complaint"];
} else {
  $complaint = "";
}


$sql = "INSERT INTO complaints (name, email, phone, complaint) VALUES ('$name', '$email', '$phone', '$complaint')";

if ($conn->query($sql) === TRUE) {
  echo "Complaint registered successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Complaint Registration Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			max-width: 500px;
			margin: 30 auto;
		}
		h2 {
			text-align: center;
			margin-top: 0;
		}
		input[type="text"], textarea {
			padding: 10px;
			margin-bottom: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
			width: 100%;
		}
		textarea {
			height: 150px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			float: right;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		label {
			display: block;
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<?php include 'navbar.php';?>
	<form action="" method="post">
		<h2>Complaint Registration Form</h2>
		<label for="name">Name</label>
		<input type="text" name="name" id="name" required>
		<label for="email">Email</label>
		<input type="text" name="email" id="email" required>
		<label for="phone">Phone Number</label>
		<input type="text" name="phone" id="phone" required>
		<label for="complaint">Complaint</label>
		<textarea name="complaint" id="complaint" required></textarea>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
