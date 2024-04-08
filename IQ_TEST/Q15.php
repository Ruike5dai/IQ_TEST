<?php
    session_start();
    $answer = $_POST["q15"];

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
    $sql = "UPDATE IQ_test SET Q15 = '$answer' WHERE Name = '$uid'";

    if($conn->query($sql) === TRUE){
        echo "插入成功";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $answers = "SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15 FROM Name = '$uid'";

    $Canswer = $_SESSION['Canswers'];
    $Score = $_SESSION['Score'];

    for ($i=0; $i<15; $i++){
        if ($answers[$i] == $Canswer[$i]){
            $Score += 10;
        }
    }

    $_SESSION['Score'] = $Score;
    $mark = "UPDATE IQ_test SET SCORE = '$Score' WHERE Name = '$uid'";

    mysqli_close($conn);

    header("Location: SCORE.php");
    exit;
?>