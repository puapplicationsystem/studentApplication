<?php
// Connect to your database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch Aadhar number from POST request
$aadhar = $_POST['aadhar'];

// Query to search Aadhar number in database
$sql = "SELECT * FROM your_table WHERE aadhar_no = '$aadhar'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Concatenate all data into a single string
        $output = "Name: " . $row["name"]. "<br>";
        $output .= "Aadhar No: " . $row["aadhar_no"]. "<br>";
        $output .= "Date of Birth: " . $row["dob"]. "<br>";
        $output .= "Mobile: " . $row["mobile"]. "<br>";
        $output .= "Location: " . $row["location"]. "<br>";
        $output .= "PIN: " . $row["pin"]. "<br>";

        // Echo the output
        echo $output;
    }
} else {
    echo "No results found";
}
$conn->close();
?>
