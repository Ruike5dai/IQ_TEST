<?php
    session_start();
    $answer = $_POST["q6"];

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
    $sql = "UPDATE IQ_test SET Q6 = '$answer' WHERE Name = '$uid'";

    if($conn->query($sql) === TRUE){
        echo "插入成功";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

    header("Location: Q7.html");
    exit;
?>