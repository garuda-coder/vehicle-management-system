<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle management";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the complaint ID and admin's reply
$complaint_id = $_POST["complaint_id"];
$reply = $_POST["reply"];

// Update the complaint with the admin's reply
$sql = "UPDATE complaints SET admin_reply='$reply' WHERE id='$complaint_id'";

if ($conn->query($sql) === TRUE) {
    echo "Reply submitted successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
