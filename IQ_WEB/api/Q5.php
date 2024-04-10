<?php
    session_start();
    $answer = $_POST["q4"];

    $start_time = time();
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

    $time_spend =  $start_time - $_SESSION['Time'];
    $_SESSION['Time'] = $start_time;

    $sql = "UPDATE IQ_test SET Q4 = '$answer' WHERE Name = '$uid'";
    $sql2 = "UPDATE iq_result SET Q4Time = '$time_spend' WHERE Name = '$uid'";

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
<title>Q5</title>
<link rel="stylesheet" href="./styles.css">
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
        <form  action="./Q6.php" method="post">
            <label>选择答案</label>
            <input type="text" name = "q5" value="answer">
            <input type="submit" placeholder="确定">
        </form>
    </div>
</body>
</html>