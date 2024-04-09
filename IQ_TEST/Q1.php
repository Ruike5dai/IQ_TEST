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
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Q1</title>
<link rel="stylesheet" href="styles.css">
<script src="function.js"></script>
</head>

<body class = "content">
    <div>
        <img src="Q.jpg" alt="中间图片" class ="question">
        <div class="answers">
            <div class="answer">
                <img src="A1.jpg" alt="选项1">
            </div>
            <div class="answer">
                <img src="A2.jpg" alt="选项2">
            </div>
            <div class="answer">
                <img src="A3.jpg" alt="选项3">
            </div>
            <div class="answer">
                <img src="A4.jpg" alt="选项4">
            </div>
            <div class="answer">
                <img src="A5.jpg" alt="选项5">
            </div>
            <div class="answer">
                <img src="A6.jpg" alt="选项6">
            </div>
        </div>
        <form  action="./Q2.php" method="post">
            <label>选择答案</label>
            <input type="text" name = "q1" value="answer">
            <input type="submit" placeholder="确定">
        </form>
    </div>
</body>
</html>