<?php
echo " hello ";
  $conn = new mysqli("localhost","root","","exam");

    if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phones'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $orgname = $_POST['orgname'];
    $strength = $_POST['strength'];
    $sql = "INSERT INTO organisations VALUES('$uname','$pass','$email','$orgname',$phone,$strength)";
    $result = $conn->query($sql);
    if ($result === TRUE) {
        echo "<script>alert(' organisation created succcesfully !!'); window.location.href='Login.html';</script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();
?>