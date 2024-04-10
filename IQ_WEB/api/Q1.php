<?php
    session_start();

    $start_time = time();
    $_SESSION["Time"] = $start_time;
    $uid = $_POST["Name"];
    $_SESSION['uid'] = $uid;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iq";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    echo "连接成功";

    $sql = "INSERT INTO iq_test (Name) VALUES ('$uid')";
    $sql2 = "INSERT INTO iq_result (Name) VALUES ('$uid')";

    if($conn->query($sql) === TRUE){
        echo "插入成功";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if($conn->query($sql2) === TRUE){
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
<link rel="stylesheet" href="./styles.css">
<script src="function.js"></script>
</head>

<body class = "content">
    <div>
        <img src="./statics/questions/Q1/Q.png" alt="中间图片" class ="question">
        <div class="answers">
            <div class="answer">
                <img src="IQ_TEST/statics/questions/Q1/A.png" alt="选项1">
            </div>
            <div class="answer">
                <img src="IQ_TEST/statics/questions/Q1/B.png" alt="选项2">
            </div>
            <div class="answer">
                <img src="IQ_TEST/statics/questions/Q1/C.png" alt="选项3">
            </div>
            <div class="answer">
                <img src="IQ_TEST/statics/questions/Q1/D.png" alt="选项4">
            </div>
            <div class="answer">
                <img src="IQ_TEST/statics/questions/Q1/E.png" alt="选项5">
            </div>
            <div class="answer">
                <img src="IQ_TEST/statics/questions/Q1/F.png" alt="选项6">
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