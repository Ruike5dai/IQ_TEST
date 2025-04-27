<?php
    session_start();

    $start_time = time();
    $_SESSION["Time"] = $start_time;
    $uid = $_POST["Name"];
    $age = $_POST["Age"];
    $education = $_POST["Education"];
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

    $sql = "INSERT INTO iq_test (Name,Age,Education) VALUES ('$uid','$age','$education')";
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
<link rel="stylesheet" href="../statics/css/styles.css">
<script type = "text/javascript" src="./function.js"></script>
</head>

<body>
    <div>
    <div class = "question-container">
        <img src="../statics/questions/Q1/Q.png" alt="中间图片" class ="question-image">
        <div class="answer-container">
            <div class="answer-row">
                <img src="../statics/questions/Q1/A.png" alt="选项1" class = "answer-option">
                <div class = "wdiv">A</div>
                <img src="../statics/questions/Q1/B.png" alt="选项2" class = "answer-option">
                <div>B</div>
                <img src="../statics/questions/Q1/C.png" alt="选项3" class = "answer-option">
                <div>C</div>
            </div>
            <div class="answer-row">
                <img src="../statics/questions/Q1/D.png" alt="选项4" class = "answer-option">
                <div>D</div>
                <img src="../statics/questions/Q1/E.png" alt="选项5" class = "answer-option">
                <div>E</div>
                <img src="../statics/questions/Q1/F.png" alt="选项6" class = "answer-option">
                <div>F</div>
            </div>
        </div>
        <form  action="./Q2.php" method="post">
            <label>Select answer here</label>
            <select name = "q1" id = "q1">
                <option value="answer1">A</option>
                <option value="answer2">B</option>
                <option value="answer3">C</option>
                <option value="answer4">D</option>
                <option value="answer4">E</option>
                <option value="answer4">F</option>
            <input type="submit" value="Submit">
        </form>
        <button onclick = back()>Return to previous</button>
    </div>
</body>
</html>