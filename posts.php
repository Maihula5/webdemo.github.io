<?php
require("connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; // reading users input(name) from the form
    $location = $_POST["location"]; //reading the email from the form
    $time = $_POST["time"];
    $date = $_POST["date"];
    $bird = $_POST["bird"];
    $activity = $_POST["activity"];
    $duration = $_POST["duration"];
    $comment = $_POST["comment"];


    // Insert into database
    $sql = " INSERT INTO `posts` (`username`, `location`, `time`, `date`, `bird`, `activity`, `duration`, `comments`) VALUES  ('$name', '$location', '$time', '$date', '$bird', '$activity', '$duration', '$comment')";
    
    if ($connection->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $connection->error;
    }
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP MySQL Form</title>
</head>
<body>
    <h2>Enter Post Info</h2>
    <form method="POST" action="">
        UserName: <input type="text" name="name" required><br><br>
        Location: <input type="text" name="location" required><br><br>
        Time: <input type="time" name="time" required><br><br>
        Date: <input type="date" name="date" required><br><br>
        Bird: <input type="text" name="bird" required><br><br>
        Activity: <input type="text" name="activity" required><br><br>
        Duration(in Minutes):<input type="int" name="duration" required><br><br> 
         Comment: <input type="text" name="comment" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>