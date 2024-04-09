<?php
    session_start();
    $uid = $_POST["Name"];
    $_SESSION['uid'] = $uid;
    $Score = 0;
    $Canswers = array('A','A','C','E','E','F','F','E','B','A','C','E','F','A','B');
    $_SESSION['Canswers'] = $Canswers;
    $_SESSION['Score'] = $Score;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iq";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    echo "连接成功";
    $sql = "INSERT INTO IQ_test (Name) VALUES ('$uid')";

    if($conn->query($sql) === TRUE){
        echo "插入成功";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

    header("Location: https://iq-test-neon.vercel.app/Q1.html");
    exit;
?>
