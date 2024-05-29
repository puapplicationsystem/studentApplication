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
            overflow-y: auto;
            max-height: 500px;
        }
        #title {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body bgcolor="#EEEEEE">
    <div id="div1">
        <h1 id="title">List Page</h1>
        <div id="div2">
            <?php
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

            $sql = "SELECT aadhar, name, dof, mobile, location, pincode FROM personal";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Aadhar No</th><th>Name</th><th>Date of Birth</th><th>Mobile</th><th>Location</th><th>Pincode</th></tr>";

                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['aadhar']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['dof']}</td>
                            <td>{$row['mobile']}</td>
                            <td>{$row['location']}</td>
                            <td>{$row['pincode']}</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
