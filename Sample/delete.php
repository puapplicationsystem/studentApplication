<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #div1{
            background-color: white;
            width: 80%;
            height: 80%;
            border-radius: 15px;
            padding: auto;
            border-color: black;
            border: 12px;
            box-shadow: 5px 5px 5px 5px grey;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
        #title{
            text-align: center;
        }
        #button{
            margin-left: 15%;
            size: 15px;
            background-color: grey;
            border-radius: 12px;
            width:20% ;
            height: 40px;
        } 
        #form{
            margin-left: 37%;
            margin-top: 5%;
            font-size: 20px;
        }
        #button{
            margin-left: 15%;
            size: 15px;
            background-color: grey;
            border-radius: 12px;
            width:20% ;
            height: 40px;
        }
        #button:hover{
            background-color: white;
            box-decoration-break: 12px 12px 12px 12px black;
        }
    </style>
     <script>
        // JavaScript for displaying alert messages
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body bgcolor="#EEEEEE">
    <div id="div1">
         <h1 id="title"> Delete Page</h1>
         <form method="post" action="" id="form">
            <label>Aadhar No  &emsp; &ensp;:</label>
            <input type="text" name="aadhar" placeholder="Enter Your Aadhar No " required><br><br>
            <input type="submit" id="button">
         </form>
    </div>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST["aadhar"])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "personal";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Prepare and bind SQL statement to check if Aadhar exists
        $check_stmt = $conn->prepare("SELECT * FROM personal WHERE aadhar = ?");
        $check_stmt->bind_param("s", $aadhar);
        $aadhar = $_POST["aadhar"];
        $check_stmt->execute();
        $result = $check_stmt->get_result();

        if ($result->num_rows > 0) {
            // Aadhar exists, proceed with deletion
            $delete_stmt = $conn->prepare("DELETE FROM personal WHERE aadhar = ?");
            $delete_stmt->bind_param("s", $aadhar);
            $delete_stmt->execute();

            // Check if deletion was successful
            if ($delete_stmt->affected_rows > 0) {
                echo "<script>showAlert('Data Removed successfully');</script>";
            } else {
                echo "<script>showAlert('Failed to remove data');</script>";
            }

            $delete_stmt->close();
        } else {
            // Aadhar doesn't exist, display alert message
            echo "<script>showAlert('Aadhar number is not in the database');</script>";
        }

        $check_stmt->close();
        $conn->close();
    } else {
        echo "<script>showAlert('Aadhar number is required');</script>";
    }
}
?>
