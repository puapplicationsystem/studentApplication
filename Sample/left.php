<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #menu{ 
            color: black;
            list-style-type: none;
            position: absolute;
            top:30%;
            left:50%;
            transform: translate(-50%,-50%);
           
        }
        #menu_item{
            padding: 14px;
            margin: 5px;
            border-radius: 12px ;
            
        }
        #menu_item:hover{
            
            background-color: aliceblue;
        }
        body{
            background-color: #B6B6B4;
        }
       a{
        color: black;
        text-decoration: none;
       }
       h1{
        color: black;
       }
    </style>
</head>
<body>
    <h1 align="center">MENU </h1>
    <h1>
    <ol id="menu">
        <li id="menu_item"><a href="insert.html" target="rightFrame">Insert</a></li>
        <li id="menu_item"><a href="update.php" target="rightFrame">Update</a></li>
        <li id="menu_item"><a href="delete.php" target="rightFrame">Delete</a></li>
        <li id="menu_item"><a href="find.php" target="rightFrame" >List</a></li>
    </ol></h1>
</body>
</html>