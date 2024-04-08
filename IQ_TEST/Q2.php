<?php
    $answer = $_POST["q2"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iq";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    echo "连接成功";
    $sql = "INSERT INTO IQ_test (Q2) VALUES ('$answer')";

    if($conn->query($sql) === TRUE){
        echo "插入成功";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

    header("Location: http://localhost/ceshi/Q3.html");
    exit;
?>