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

// Retrieve the complaints
$sql = "SELECT * FROM complaints";
$result = $conn->query($sql);

// Display the complaints
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Display the complaint fields
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Phone: " . $row["phone"] . "<br>";
        echo "Complaint: " . $row["complaint"] . "<br>";

        // Add a reply form
        echo "<form method='post' action='reply.php'>";
        echo "<input type='hidden' name='complaint_id' value='" . $row["id"] . "'>";
        echo "<label for='reply'>Reply:</label>";
        echo "<textarea name='reply' id='reply'></textarea><br>";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";

        // Display the reply, if any
        if ($row["admin_reply"]) {
            echo "Admin reply: " . $row["admin_reply"] . "<br>";
        }

        echo "<hr>";
    }
} else {
    echo "No complaints found.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Complaint Reply</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <div class="container">
        <div>
        <?php include 'navbar_admin.php'; ?>
    </div>
    </div>
</body>
</html>