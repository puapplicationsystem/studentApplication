<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #div1 {
            background-color: white;
            width: 80%;
            height: auto;
            border-radius: 15px;
            box-shadow: 5px 5px 5px 5px grey;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
        }
        #div2 {
            background-color: #EEEEEE;
            width: 90%;
            height: auto;
            border-radius: 15px;
            margin-top: 7%;
            box-shadow: 5px 5px 5px 5px grey;
            position: relative;
            padding: 20px;
        }
        #title {
            text-align: center;
        }
        #form, #edit-form {
            margin-left: 5%;
            margin-top: 5%;
            font-size: 20px;
        }
        #button {
            margin-left: 5%;
            font-size: 15px;
            background-color: grey;
            border-radius: 12px;
            width: 20%;
            height: 30px;
        }
        #button:hover {
            background-color: white;
            border: 1px solid black;
        }
        h2, p, label, input {
            display: block;
            margin: 10px 0;
        }
        #edit-form input[readonly] {
            background-color: #dcdcdc;
        }
    </style>
</head>
<body bgcolor="#EEEEEE">
    <div id="div1">
        <h1 id="title">Update Page</h1>
        <form method="post" action="" id="form">
            <label>Aadhar No:</label>
            <input type="text" name="aadhar" placeholder="Enter Your Aadhar No" required>
            <input type="submit" value="Fetch Details" id="button">
        </form>
        <div id="div2">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

                if (isset($_POST["aadhar"]) && !isset($_POST["edit"])) {
                    $aadhar = $_POST["aadhar"];
                    $check_stmt = $conn->prepare("SELECT * FROM personal WHERE aadhar = ?");
                    $check_stmt->bind_param("s", $aadhar);
                    $check_stmt->execute();
                    $result = $check_stmt->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo "
                            <h2>Information for Aadhar Number: {$row['aadhar']}</h2>
                            <form method='post' action='' id='edit-form'>
                                <input type='hidden' name='aadhar' value='{$row['aadhar']}'>
                                <label for='name'>Name:</label>
                                <input type='text' id='name' name='name' value='{$row['name']}' readonly>
                                <label for='dof'>Date of Birth:</label>
                                <input type='date' id='dof' name='dof' value='{$row['dof']}' readonly>
                                <label for='mobile'>Mobile:</label>
                                <input type='text' id='mobile' name='mobile' value='{$row['mobile']}' readonly>
                                <label for='location'>Location:</label>
                                <input type='text' id='location' name='location' value='{$row['location']}' readonly>
                                <label for='pincode'>Pincode:</label>
                                <input type='text' id='pincode' name='pincode' value='{$row['pincode']}' readonly>
                                <input type='button' value='Edit' id='edit-button' onclick='enableEditing()'>
                                <input type='submit' value='Update' id='update-button' style='display:none;'>
                            </form>
                        ";
                    } else {
                        echo "<script>alert('Aadhar number is not in the database');</script>";
                    }

                    $check_stmt->close();
                }
                else {  
                    echo "<script>alert('Full required fileds')</script>";
                }
                
                if (isset($_POST["aadhar"]) && isset($_POST["name"]) && isset($_POST["dof"]) && isset($_POST["mobile"]) && isset($_POST["location"]) && isset($_POST["pincode"])) {
                    // Update information in the database
                    $aadhar = $_POST["aadhar"];
                    $name = $_POST["name"];
                    $dof = $_POST["dof"];
                    $mobile = $_POST["mobile"];
                    $location = $_POST["location"];
                    $pincode = $_POST["pincode"];

                    $update_stmt = $conn->prepare("UPDATE personal SET name=?, dof=?, mobile=?, location=?, pincode=? WHERE aadhar=?");
                    $update_stmt->bind_param("ssssss", $name, $dof, $mobile, $location, $pincode, $aadhar);

                    if ($update_stmt->execute()) {
                        echo "<script>alert('Information updated successfully');
                        window.location.href=window.location.href;
                        </script>";

                    } else {
                        echo "<script>alert('Error updating information');</script>";
                    }

                    $update_stmt->close();
                } else {
                    
                }

                $conn->close();
            }
            ?>
        </div>
    </div>
    <script>
        function enableEditing() {
            document.getElementById('name').removeAttribute('readonly');
            document.getElementById('dof').removeAttribute('readonly');
            document.getElementById('mobile').removeAttribute('readonly');
            document.getElementById('location').removeAttribute('readonly');
            document.getElementById('pincode').removeAttribute('readonly');
            document.getElementById('edit-button').style.display = 'none';
            document.getElementById('update-button').style.display = 'block';
        }
        function clearDiv2(){
            document.getElementById("div2").innerHTML="";
        }
    </script>
</body>
</html>
