<?php
    session_start();
    $answer = $_POST["q1"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iq";

    $uid = $_SESSION['uid'];
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    echo "连接成功";
    $sql = "UPDATE iq_test SET Q1 = '$answer' WHERE Name = '$uid'";

    if($conn->query($sql) === TRUE){
        echo "插入成功";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

    header("Location : ./Q2.html");
    exit;
?>