<?php
    session_start();

    $start_time = time();
    $answer = $_POST["q18"];

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
    
    $count = 0;
    $total = 0;

    $time_spend =  $start_time - $_SESSION['Time'];
    $_SESSION['Time'] = $start_time;

    $sql = "UPDATE iq_test SET Q18 = '$answer' WHERE Name = '$uid'";
    $sql2 = "UPDATE iq_result SET Q18Time = '$time_spend' WHERE Name = '$uid'";
    $sql3 = "SELECT Q18 FROM iq_test";
    $result = $conn->query($sql3);

    while($row = mysqli_fetch_array($result)){
        if($row[0] == 'D'){
            $count ++;
            $total ++;
        }else{
            $total ++;
        }
    }

    $accuracy = $count / $total * 100;

    $sql4 = "UPDATE iq_accuracy SET Accuracy = '$accuracy' WHERE Question = 'Q18'";

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

    if($conn->query($sql3) === TRUE){
        echo "插入成功";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if($conn->query($sql4) === TRUE){
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
<title>Q19</title>
<link rel="stylesheet" href="../statics/css/styles.css">
<script src="function.js"></script>
</head>

<body class = "content">
    <div class = "question-container">
        <img src="../statics/questions/Q19/Q.png" alt="中间图片" class ="question-image">
        <div class="answer-container">
            <div class="answer-row">
                <img src="../statics/questions/Q19/A.png" alt="选项1" class = "answer-option">
                <img src="../statics/questions/Q19/B.png" alt="选项2" class = "answer-option">
                <img src="../statics/questions/Q19/C.png" alt="选项3" class = "answer-option">
            </div>
            <div class="answer-row">
                <img src="../statics/questions/Q19/D.png" alt="选项4" class = "answer-option">
                <img src="../statics/questions/Q19/E.png" alt="选项5" class = "answer-option">
                <img src="../statics/questions/Q19/F.png" alt="选项6" class = "answer-option">
            </div>
        </div>
        <form  action="./Q20.php" method="post">
            <label>选择答案</label>
            <input type="text" name = "q19" value="answer">
            <input type="submit" placeholder="确定">
        </form>
        <button onclick = back()>返回</button>
    </div>
</body>
</html>