<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST["name"]) && isset($_POST["aadhar"]) && isset($_POST["dof"])) {
        
            // Prepare and bind SQL statement for insertion
            $stmt = $conn->prepare("INSERT INTO personal (name, aadhar, dof ) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $aadhar, $dof);

            // Set parameters and execute
            $name = $_POST["name"];
            $aadhar = $_POST["aadhar"];
            $dof = $_POST["dof"];
           
            $stmt->execute();

            echo "<script>showAlert('New record inserted successfully');
            <a herf>
            </script>";

            $stmt->close();
        }

        $check_stmt->close();
        $conn->close();
    } else {
        echo "<script>showAlert('All fields are required');</script>";
    }

?>
