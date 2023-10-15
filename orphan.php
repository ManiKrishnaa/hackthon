<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="orphan.css">
    <style>
        .table{
            margin:10px;
            padding:20px;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:20px;
            top:50px;
        }
        th,td{
            padding: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="nav">
            <ul>
            <li>
                <a href="orphan.php">Home</a>
            </li>
            <li>
                <a href="update.html">Update</a>
            </li>
            <li>
                <a href="index.html">Log Out</a>
            </li>
            </ul>
        </div>
        <div class="table">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "exam";
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT names,emails,phone,donated FROM donor where org_name='sai'";
                $result = $conn->query($sql);
                
                echo "<table>";
                echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Donated</th></tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["names"] . "</td><td>" . $row["emails"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["donated"] . "</td></tr>";
                }
                
                echo "</table>";
                
                $conn->close();
            ?>
        </div>
    </div>
</body>
</html>