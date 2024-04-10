<?php
    session_start();
    $answer = $_POST["q20"];

    $start_time = time();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iq";
    
    $uid = $_SESSION['uid'];
    $Score = 0;
    $Canswers = array('A','A','C','E','E','F','F','E','B','A','C','E','F','A','B','B','A','E','F','B');
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    echo "连接成功";

    $time_spend =  $start_time - $_SESSION['Time'];
    $_SESSION['Time'] = $start_time;

    $sql = "UPDATE iq_test SET Q20 = '$answer' WHERE Name = '$uid'";
    $sql2 = "UPDATE iq_result SET Q20Time = '$time_spend' WHERE Name = '$uid'";
        
    $result = $_SESSION['Score'];
    $sql3 = "SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15,Q16,Q17,Q18,Q19,Q20 FROM iq_test WHERE Name = '$uid'";
    $answers = $conn->query($sql3);

    $row = mysqli_fetch_array($answers);

    for ($i=0; $i<20; $i++){
        if ($row[$i] == $Canswers[$i]){
            $Score = $Score + 10;
        }
    }

    $sql4 = "UPDATE iq_test SET SCORE = '$Score' WHERE Name = '$uid'";

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
    <title>Result</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body class = "content">
    
    <h1>IQ 测试</h1>
    <h1><?php echo $Score ?></h1>
    <div class = "maincontaint">
        这是最后一页
    </div>
</body>
</html>